<form id="payment" name="payment" method="POST" action="<?php echo SITE ?>/payment?id=17&pay=result" enctype="utf-8">
  <input type="hidden" name="orderNumber" value="<?php echo $data['id'] ?>"/>
  <input type="hidden" name="amount" value="<?php echo $data['summ'] ?>" />
  <input type="hidden" name="currency" value="643" />
  <input type="hidden" name="returnUrl" value="<?php echo SITE ?>/payment?id=17&pay=result"/>
  <input type="hidden" name="language" value="ru" />
  <input type="hidden" name="description" value="<?php echo $data['orderNumber'] ?>"/>
  <input type="hidden" name="paymentSberbank" value="1" />
  <input class="green-btn big-btn" type='submit' value='Оплатить' style="padding: 10px 20px;">
  <img style="margin-top:10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAK0AAAAxCAYAAACoCyl7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MUVCNDgwNzc3RThFMTFFMzk3MjJCNzhDNEFCQkZCRjYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MUVCNDgwNzg3RThFMTFFMzk3MjJCNzhDNEFCQkZCRjYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxRUI0ODA3NTdFOEUxMUUzOTcyMkI3OEM0QUJCRkJGNiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDoxRUI0ODA3NjdFOEUxMUUzOTcyMkI3OEM0QUJCRkJGNiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PikB8MYAABc+SURBVHja7Z0JXFRV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" />
</form>