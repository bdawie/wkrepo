/**
 * Created by Ibrahim Bdawie on 06.03.2015.
 */
window.onload=function()
{
    var months=['January','February','March','April','May','June','July',
        'August','September','October','November','December'];
    var today= new Date();
    document.getElementById("sc").innerHTML=months[today.getMonth()]+" "+ today.getDate()+", "+today.getFullYear();

}
