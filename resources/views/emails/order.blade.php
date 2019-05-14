@component('mail::message')
<h1>Thank you for ordering on Fusions Visual</h1>

Here your order detail :
<hr>
Order ID        : {{$mail['id']}}
<br>Package     : {{$mail['package_name']}}
<br>Description : {{$mail['package_type']}}
<br>Price       : Rp. {{number_format($mail['harga'], 0, '', '.')}},-
<hr>
<p style="text-align: center"><b>Total       : Rp. {{number_format($mail['total'], 0, '', '.')}},-</b></p>
<hr>
<p style="text-align: center">Finish your payment to complete your order.</p><br>
<h1 style="text-align: center">BCA - 72727272 a/n FusionsVisual</h1>

@component('mail::button', ['url' => route('upload')])
UPLOAD PAYMENT RECEIPT
@endcomponent

Thanks,<br>
Fusions Visual
@endcomponent
