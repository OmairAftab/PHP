<?php

$color="silver";

echo "<h2>php with html</h2>";

echo "<h1 style='background-color:blue'> Liitle bit styling as well  </h1>";
?>


<?php

$name="Omair Aftab";
echo "<span style='color: red;background-color:yellow; font-weight:800 '>My name is $name <span/>";

?>



<!-- You can even generate HTML with loops: -->

<?php
$items = ["Apple", "Banana", "Cherry"];
echo "<ul>";
foreach($items as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";
?>





<!-- Now we will use php inisde html -->

<h1>
    My real name is Mohammad <?php echo $name; ?>
</h1>

<h2> This is a <?php echo "h2 tag"; ?></h2>


<!-- color variable is stored in top mean first php <> -->
<h3  style='color:<?php echo $color; ?>'>Use variable name in styling to save time</h3>
<h3 style='color:<?php echo $color; ?>'>Use variable name in styling to save time</h3>
<h3 style='color:<?php echo $color; ?>'>Use variable name in styling to save time</h3>
<h3 style='color:<?php echo $color; ?>'>Use variable name in styling to save time</h3>
<h3 style='color:<?php echo $color; ?>'>Use variable name in styling to save time</h3>

