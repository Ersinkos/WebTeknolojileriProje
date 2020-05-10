//burası istedigim gibi olmadı tam ama çalışıyo sadece mesajlar hatalı niye bilmiyorum inşallah ilerde onu da öğrenicez.
function kontrol(pattern,value){
    r = new RegExp(pattern, "g"); 
    return r.test(value); 
}
function Dogrulama(form_iletisim){
var email_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(kontrol(email_format,form_iletisim.email.value)){
    alert("gecerli email giriniz");
    form_iletisim.email.value=" ";
    form_iletisim.email.focus();
    return false;
}
else{return true;}
}