document.addEventListener('DOMContentLoaded',function(){
    //nut menu navbar 
    var btnmenu = document.getElementById('_open');
    var openmenu = document.getElementById('global_navigation');
    var changeicon1 = document.getElementById('icon');
    var changeicon2 = document.getElementById('icontren');
    var changeicon3 = document.getElementById('iconduoi');
    var trangthai = "lan1";
    btnmenu.onclick = function(){
        if (trangthai == "lan1") {
            console.log("lan click 1");
            trangthai = "lan2";
            openmenu.classList.add("menura");
            changeicon1.classList.add("hideicon");
            changeicon2.classList.add("degicon");
            changeicon3.classList.add("degicon2");
        } else if (trangthai == "lan2") {
            console.log("lan click 2");
            trangthai = "lan1";
            openmenu.classList.remove("menura");
            changeicon1.classList.remove("hideicon");
            changeicon2.classList.remove("degicon");
            changeicon3.classList.remove("degicon2");
        }
    };

    //ket thuc nut menu
},false);

