@extends('layout')

@section('title', 'Contact')

@section('content')
<address style="font-size:25px;font-family:Verdana;">
    20 High St<br />
    Auckland, 1010<br />
    <abbr title="Phone">P:<span class="glyphicon glyphicon-phone-alt"></span></abbr>
    09-303 1382
</address>
<div style="margin-left:10px">
    <span style="display:inline-flex;">
        <img style="width:540px;height:424.12px" src="/images/store.png" alt="store" />
    </span>
    <span style="display:inline-flex;float:right">
     <iframe  style="height:424.12px;width:590px" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=139%20Carrington%20Rd%2C%20Mt%20Albert%2C%20Auckland+(Quality%20Cap)&amp;ie=UTF8&amp;t=p&amp;z=15&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </span>
    </div>
<hr/>
<div class="footer_content_top">
    <div style="margin: 40px 0; text-align: center; font-size: 20px;"><em>The first fashion company in the world to be recognised by the United Nations for sustainability...</em></div>  
</div>
@endsection