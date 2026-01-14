<?php


function divide($x,$y){
    if($y==0){
        throw new Exception("Cant divide by zero");
    }
    return $x/$y;
}



// echo divide(10,0);
echo "<br/>";
echo divide(10,5);
echo "<br/>";



try{
    echo divide(10,0);
}catch(Exception $e){
    echo "Error : " . $e->getMessage();
}finally{
    echo "<br/> Process Completed";
}

?>