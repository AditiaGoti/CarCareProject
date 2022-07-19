/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function login(){
    if((document.log.username.value!='')&&(document.log.password.value!='')){
        return true;
    }
    else
        alert('Isi dengan benar');
        return false;
}

function check(){
    if(document.form1.RB[0].checked==true){
        document.form1.harga_penitipan.value=25000;
    }else if(document.form1.RB[1].checked==true){
        document.form1.harga_penitipan.value=36000;
    }else if(document.form1.RB[2].checked==true){
        document.form1.harga_penitipan.value=40000;
    }
}

function checkNum(){
    x=event.charCode;
        if((x>=65 && x<=90)||(x>=97 && x <=122)){
            alert("Enter Numeric Value");
            document.form1.num.value='';
        }
}

function total(){
    document.form1.total_harga.value=(document.form1.harga_penitipan.value)*(document.form1.waktu_penitipan.value);
}