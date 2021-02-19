<div>稱呼：{{ $details->name }}</div>
<div>手機：{{ $details->mobile }}</div>
<div>Email：{{ $details->email }}</div>
<div>其他聯絡方式：{{ $details->contact }}</div>
<div>方便聯絡時間：{{ $details->time }}</div>
<div>需求內容：<br>{{ nl2br($details->memo) }}</div>
<hr>
<div>送出時間：{{ date('Y-m-d H:i:s') }}</div>
