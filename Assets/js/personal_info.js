var allcookies = document.cookie;

cookiearray = allcookies.split(';');

for(var i=0; i<cookiearray.length; i++){
    name = cookiearray[i].split('=')[0];
    value = cookiearray[i].split('=')[1];
    if(name == "intelligentBox_cloud_info"){
        // window.location.assign("account_shortcut.box.php");
    }else{
        Ip_adress = "";
        $.getJSON('https://json.geoiplookup.io/api?callback=?', function(data) {
            var ip = JSON.stringify(data, null, 2);
            Ip_adress = ip;
        });
        $.ajax({
            url:`http://ip-api.com/json/${Ip_adress}`,
            method:'POST',
            dataType:'json',
            beforeSend:()=>{},
            complete:()=>{},
            success:(data)=>{
                var person_cloud_info = `set ${Ip_adress} on ${data.city}, ${data.region} and ${data.timezone}`;
                document.cookie="intelligentBox_cloud_info=" + person_cloud_info;
            },
            error:()=>{}
        })
    }
}