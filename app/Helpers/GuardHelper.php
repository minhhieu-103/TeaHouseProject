<?php
function get_guard(){
    if(\Illuminate\Support\Facades\Auth::guard('customer')->check())
    {return "admin";}
    elseif(Auth::guard('user')->check())
    {return "user";}
    elseif(Auth::guard('client')->check())
    {return "client";}
}
?>
