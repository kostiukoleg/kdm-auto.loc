<?php

/**
 * Класс Updata -  класc занимается обновлением системы.
 *  - Проверяет наличие обновлений на сервере
 *   
 * @package moguta.cms
 * @subpackage Libraries
 */
class Updata {

  // Cервер обновления.
  public static $_updataServer = UPDATE_SERVER;
  /**
   * Проверяет на сервере актуальность текущей системы.
   * $noerror - не позволяет вывести исключение перед версткой
   * @return  bool|array $result массив с описанием последней версии и ее номером.
   */
  public static function checkUpdata($noCache = false, $noerror = false) {
    $timeLastUpdata = MG::getSetting('timeLastUpdata');

    if (time() < $timeLastUpdata + 6 * 60 * 24 && !$noCache) { // интервал проверки обновления 2 с половиной часа.
      $resp = MG::getSetting('currentVersion');
    $data = json_decode($resp, true);
    } /*else {
      $count = '';
      $summ = '';
      if (MG::getSetting('consentData')=='true') {
        $row = DB::query('SELECT COUNT(`id`) as `count` FROM `'.PREFIX.'product`');
        $res = DB::fetchArray($row);
        $count = $res['count'] ? $res['count'] : 0;
        $row2 = DB::query('SELECT SUM(  `summ` ) AS  `summ` FROM  `'.PREFIX.'order` 
          WHERE  `status_id` =2 OR `status_id` =5');
        $res2 = DB::fetchArray($row2);
        $summ = $res2['summ'] ? $res2['summ'] : 0;
      }      
      $checkInstall = !empty($_COOKIE['installerMoguta']) ? $_COOKIE['installerMoguta']: '';
      $fullVersion = self::checkVersion() ? 'true' : 'false';
      $post = 'version='.VER.
        '&sName='.$_SERVER['SERVER_NAME'].
        '&sIP='.(($_SERVER['SERVER_ADDR'] == "::1") ? '127.0.0.1' : $_SERVER['SERVER_ADDR']).
        '&sKey='.MG::getSetting('licenceKey').
        '&sSiteName='.MG::getSetting('sitename').
        '&sAdmin='.MG::getSetting('adminEmail').
        '&timeStartEngine='.MG::getSetting('timeStartEngine').
        '&timeFirstUpdate='.MG::getSetting('timeFirstUpdate').
        '&sPhone='.MG::getSetting('shopPhone').
        '&sAddress='.MG::getSetting('shopAddress').
        '&catalog='.$count.
        '&orders='.$summ.
        '&installer='.$checkInstall.
        '&fullVersion='.$fullVersion;
      $resp = self::sendCurl(self::$_updataServer.'/updataserver', $post);
    
      if (stristr($resp,'error:')!==FALSE){
        $res = explode('error:', $resp);
      } else {
        $res = array($resp, 'false');
      }
      $data = json_decode($res[0], true);
      DB::query("
        UPDATE `".PREFIX."setting`
          SET `value`=".DB::quote($res[0])."
        WHERE `option`='currentVersion'
      ");

      DB::query("
      UPDATE `".PREFIX."setting`
        SET `value`=".DB::quote(time())."
      WHERE `option`='timeLastUpdata'
      ");
      PM::checkPluginsUpdate();
      if (($res[1]!='false')) {      
      $disabled = json_decode($res[1], true);
      if ($disabled['status']== 'error'&&$disabled['remove']=='1') {
        //unlink('config.ini');
        if (!MG::getSetting('trialVersionStart')) {
          DB::query('INSERT INTO `'.PREFIX.'setting` (`id`, `option`, `value`, `active`, `name`) VALUES (NULL, "trialVersionStart", "true", "N", "")'); 
        }  
      }
      $result['fakeKey'] = $disabled['msg'];
      if (!MG::getSetting('trialVersion')) {
        $sql = 'INSERT INTO `'.PREFIX.'setting` (`id`, `option`, `value`, `active`, `name`) VALUES (NULL, "trialVersion",'.DB::quote($disabled['msg']).', "N", "")';
        DB::query($sql); 
      } else {
        DB::query('UPDATE `'.PREFIX.'setting` SET `value` = '.DB::quote($disabled['msg']).' WHERE `option`= "trialVersion"'); 
      }
      } else {
        if (MG::getSetting('trialVersionStart')&&MG::getSetting('trialVersionStart')!='true1') {          
          DB::query('DELETE FROM `'.PREFIX.'setting` WHERE `option`= "trialVersionStart"'); 
        }  
        DB::query('DELETE FROM `'.PREFIX.'setting` WHERE `option`= "trialVersion"');
      }
    }*/
    // если curl запрос вернул false, значит он не удался.
   /* if (!$resp && !$noerror) {
      echo "<div style='color:red; margin:10px;'>Невозможно выполнить CURL запрос, для проверки версии системы!</div>";
    } */ 
      
    if (!empty($data['dateActivateKey'])) {
      MG::setOption(array('option' => 'dateActivateKey ', 'value' => $data['dateActivateKey']));
    }

    if ($data['last']) {
      $result['msg'] = '
      <ul class="system-version-list">
        <li> <b>Ближайшая версия для обновления: </b><span id="lVer">'.$data['last'].'</span></li>
        <li> <b>Последняя версия системы: </b><span id="fVer">'.$data['final'].'</span></li>
        <li> <b>Описание: </b>'.$data['disc'].'</li>       
      </ul>';
      $result['lastVersion'] = $data['last'];
      $args = func_get_args();
      return MG::createHook(__CLASS__."_".__FUNCTION__, $result, $args);
    }
    
    $args = func_get_args();
    return MG::createHook(__CLASS__."_".__FUNCTION__, false, $args);
  }

  /**
   * Обновляет текущую версию системы.
   * @param string $version - версия последнего обновления
   * @return bool
   */
  public static function updataSystem($sysFold, $version) {

    $file = $version.'-m.zip';

    if (!file_exists(SITE_DIR.$file)) {

	 
      $ch = curl_init(self::$_updataServer.'/updata/history/'.$sysFold.'/'.$version.'.zip');
      $fp = fopen($file, "w");

      curl_setopt($ch, CURLOPT_FILE, $fp);
      curl_setopt($ch, CURLOPT_HEADER, 0);
	  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_exec($ch);
      curl_close($ch);
      fclose($fp);
    }
    $args = func_get_args();
    $return = false;

    if (file_exists($file)) {
      $return = true;
    }
	if(!filesize($file)){
	  $return = false;
	  unlink($file);
	}
	$zip = new ZipArchive;
	$res = $zip->open($file, ZIPARCHIVE::CREATE);
    if ($res !== TRUE) {
	  $return = false;
	  unlink($file);
	}
    return MG::createHook(__CLASS__."_".__FUNCTION__, $file, $args);
  }

  /**
   * Распаковывает архив с обновлением, если он есть в корне сайта.
   * После распаковки удаляет заданый архив.
   *
   * @param $file - название архива, который нужно распаковать
   * @return bool
   */
  public static function extractZip($file) {

    if (file_exists($file)) {
      $zip = new ZipArchive;
      $res = $zip->open($file, ZIPARCHIVE::CREATE);

      if ($res === TRUE) {
        $realDocumentRoot = str_replace(DIRECTORY_SEPARATOR.'mg-core'.DIRECTORY_SEPARATOR.'lib', '', dirname(__FILE__));
        $zip->extractTo($realDocumentRoot);
        $zip->close();
        unlink($file);

        // выполняет некоторые действия, для адаптации старой версии БД.
        self::updataSubInfo('modificatoryInc.php');
        MG::setOption('timeLastUpdata', 0);
        return true;
      } else {
        return false;
      }
    }
    return false;
  }

  /**
   * Отправляет запрос на сервер, с целью получить данные о последней версии.
   *
   * @param string $url адрес сервера.
   * @param string $post  параметры для POST запроса.
   * @return string ответ сервера.
   */
  private static function sendCurl($url, $post) {


    // Иницализация библиотеки curl.
    $ch = curl_init();

    // Устанавливает URL запроса.
    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    // При значении true CURL включает в вывод заголовки.
    curl_setopt($ch, CURLOPT_HEADER, false);

    // Куда помещать результат выполнения запроса:
    //  false – в стандартный поток вывода,
    //  true – в виде возвращаемого значения функции curl_exec.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Нужно явно указать, что будет POST запрос.
    curl_setopt($ch, CURLOPT_POST, true);

    // Здесь передаются значения переменных.
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

    // Максимальное время ожидания в секундах.
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);

    // Выполнение запроса.
    $res = curl_exec($ch);

    //  return array();
    // Освобождение ресурса.
    curl_close($ch);
    $args = func_get_args();
    return MG::createHook(__CLASS__."_".__FUNCTION__, $res, $args);
  }

  /**
   * Выполняет набор MySQL запросов для адаптации страрой версии БД к новому виду.
   * Удаляет необходимые файлы при обновлении системы.
   * Файл модификтаор содерсит массивы $sqlQuery и $deleteArray, в которых перечисленны
   * запросы к БД и пути к удаляемым файлам.
   *
   * @param string $modificatoryFile имя файла модификатора.
   * @return boolean
   */
  private static function updataSubInfo($modificatoryFile) {

    if (!file_exists($modificatoryFile)) {
      return false;
    }

    require_once $modificatoryFile;

    if (is_array($sqlQuery)) {
      foreach ($sqlQuery as $sql) {
        DB::query($sql);
      }
    }

    if (is_array($deleteArray)) {
      foreach ($deleteArray as $deletedfile) {
        if (file_exists($deletedfile)) {
          unlink($deletedfile);
        }
      }
    }
    unlink($modificatoryFile);
    return true;
  }

  public static function preDownload($version) {
   
    $post = 'step=1'.
      '&sName='.$_SERVER['SERVER_NAME'].
      '&sIP='.(($_SERVER['SERVER_ADDR'] == "::1") ? '127.0.0.1' : $_SERVER['SERVER_ADDR']).
      '&sKey='.MG::getOption('licenceKey').
      '&ver='.$version;

    $res = self::sendCurl(self::$_updataServer.'/updataserver', $post);

    try {
      $data = json_decode($res, true);
    } catch (Exception $exc) {
      $data['msg'] = $exc;
      $data['status'] = 'error';
    }

    MG::setOption(array('option' => 'dateActivateKey ', 'value' => $data['dateActivateKey']));

    if ('succes' == $data['status']) {
      $file = self::updataSystem($data['msg'], $version);

      if (!file_exists($file)) {
        $data['msg'] = 'Обновление не удалось!';
        $data['status'] = 'error';
      }
    }

    return $data;
  }
  public function checkVersion(){
    $res = class_exists('Controllers_Compare')||class_exists('Controllers_Group') ? 'true' : 'false';
    if ($res!='true') {
      $dbRes[] = DB::query('SHOW COLUMNS FROM `'.PREFIX.'product` WHERE FIELD = "system_set"');
      if($row = DB::fetchArray($dbRes)){
        return true;
      }
      $dbRes = DB::query('SHOW COLUMNS FROM `'.PREFIX.'order` WHERE FIELD = "orders_set"');
      if($row = DB::fetchArray($dbRes)){
        return true;
      }
    }
    if ($res!='true') {
      $pa = new Controllers_Payment();
      if (method_exists($pa, 'webmoney')||method_exists($pa, 'yandexKassa')||method_exists($pa, 'qiwi')) {
        return true;
      }
    }
    $filter = new Filter(array());
    if ($filter->getHtmlPropertyFilter() != '') {
      return true;
    }
    return false;
  }

}
