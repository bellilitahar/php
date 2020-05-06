<?php 
// function  نوع الأول من  
// function print_message(){
//     echo "<h1>Learn PHP With Coder Shiyar</h1>";
// }
// print_message();
// function نوع الثاني يمكنك إنشاء متغيرات ضمن () وتمرير بيانات لهم عند استدعاء  
// function print_data($name,$year){
// echo "<h2> Name: " . $name . " , Year: " .  $year . "</h2>";
// }
// print_data("Coder Shiyar",2000);
// print_data("Hamid",2002);


// function result(){
// echo "<h1>تم استدعاء الوظيفة</h1>";
//     return "<p> Coder Shiyar </p>";
// }

// $getData = result();

// echo $getData;


function setName($name){

    return "<h2> Name: $name</h2>"; 
}

function setData(){

    return "Coder Shiyar";
}

if(setData() == true){
echo "صح";
}else if(setData() == false){
    echo "غلط";
}
echo setName("Coder Shiyar");
echo setName("Hamid");
?>