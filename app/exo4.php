<?php

$array = [12, 65, 95, 41, 85, 63, 71, 64];

$arrayA = [12, "le", 95, 12, 85, "le", 71, "toi", 95, "la"];
$arrayB = [85, "toi", 95, "la", 65, 94, 85, "avec", 37, "chat"];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <title>Introduction PHP - Exo 4</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - Exo 4</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Entrainement</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Donnez moi des fruits</a></li>
                    <li><a href="exo3.php" class="main-nav-link">Donnez moi de la thune</a></li>
                    <li><a href="exo4.php" class="main-nav-link active">Donnez moi des fonctions</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Netflix</a></li>
                    <li><a href="exo6.php" class="main-nav-link">Mini-site</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau et retourne la chaîne de caractère HTML permettant d'afficher les valeurs du tableau sous la forme d'une liste.</p>
            <div class="exercice-sandbox">
                <?php
                    function getString(array $array) :string{
                        $text = "";
                        foreach ($array as $value) {
                            $text.= "{$value}";
                        }
                        return $text;
                    }

                    $test = getString($array);
                    var_dump($test);
                ?>
            </div>
        </section>

        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les valeurs paires. Afficher les valeurs du tableau sous la forme d'une liste HTML.</p>
            <div class="exercice-sandbox">
                <?php
                    function getEvenValues(array $array) {
                        foreach ($array as $value) {
                            if ($value %2 === 0) {
                                $evenArray[] = $value;
                                
                            }
                        }
                        return $evenArray;
                    }
                    var_dump(getEvenValues($array));
                ?>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les entiers d'index pair</p>
            <div class="exercice-sandbox">
                <?php
                /**
                 * Undocumented function
                 * Gets integers of even index from an array of integers
                 * @param array $array - array of integers
                 * @return array - array of integers with even index
                 */
                    function getEvenIndex(array $array) :array{
                        foreach ($array as $index => $value) {
                            if ($index %2 === 0) {
                               //var_dump($index);
                                $evenIndexArray[] = $value;
                            }
                        }
                        return $evenIndexArray;
                    }
                    var_dump(getEvenIndex($array));
                ?>
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers. La fonction doit retourner les valeurs du tableau mulipliées par 2.</p>
            <div class="exercice-sandbox">
            <?php
                /**
                 * Undocumented function
                 * Multiplies by two values of an array of integers
                 * @param array $array - array of integers
                 * @return array - array of integers multiplied by two
                 */
                    function multiplyByTwo(array $array) :array{
                        foreach ($array as $value) {
                             $result[] = $value * 2;
                        }
                        return $result;
                    }
                    var_dump(multiplyByTwo($array));
                ?>
            </div>
        </section>

        <!-- QUESTION 4 bis -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4 bis</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et un entier. La fonction doit retourner les valeurs du tableau divisées par le second paramètre</p>
            <div class="exercice-sandbox">
            <?php
                /**
                 * Undocumented function
                 * Divides by an integer values of an array of integers
                 * @param array $array - array of integer
                 * @param integer $divider - integer used to divide
                 * @return array  - array of values divided
                 */
                    function dividesByInteger(array $array, int $divider) :array{
                        foreach ($array as $value) {
                                $result[] = $value / $divider;
                        }
                        return $result;
                    }
                    var_dump(dividesByInteger($array, 4));
                ?>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers ou de chaînes de caractères et retourne le tableau sans doublons</p>
            <div class="exercice-sandbox">
                <?php
                /**
                 * Undocumented function
                 * Excludes duplicates of an array
                 * @param array $array - array of integers or strings
                 * @return array - array without duplicates
                 */
                    function excludeDuplicates(array $array) :array{
                        return array_unique($array);
                    }
                    var_dump(excludeDuplicates($arrayA));
                ?>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre 2 tableaux et retourne un tableau représentant l'intersection des 2</p>
            <div class="exercice-sandbox">
                <?php
                /**
                 * Undocumented function
                 * Gets intersection of two arrays
                 * @param array $array1
                 * @param array $array2
                 * @return array - array representing the intersection of the two arrays above
                 */
                    function getArraysIntersec(array $array1, array $array2) :array{
                        return array_intersect_assoc($array1, $array2);
                        //return array_intersect($array1, $array2);
                    }
                    var_dump(getArraysIntersec($arrayA, $arrayB));
                ?>
            </div>
        </section>

        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre 2 tableaux et retourne un tableau des valeurs du premier tableau qui ne sont pas dans le second</p>
            <div class="exercice-sandbox">
                <?php
                    /**
                     * Undocumented function
                     * Gets difference between two arrays
                     * @param array $array1
                     * @param array $array2
                     * @return array - array representing the difference of the two arrays above
                     */
                        function getArraysDiff(array $array1, array $array2) :array{
                            return array_diff($array1, $array2);
                        }
                        var_dump(getArraysDiff($arrayA, $arrayB));
                ?>
            </div>
        </section>


        <!-- QUESTION 8 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Réécrire la fonction précédente pour lui ajouter un paramètre booléen facultatif. Si celui-ci est à true, le tableau retourné sera sans doublons</p>
            <div class="exercice-sandbox">
                <?php
                    /**
                     * Undocumented function
                     * Gets difference between two arrays, and excludes duplicates if you want to
                     * @param array $array1
                     * @param array $array2
                     * @param boolean $noDuplic - function excludes duplicates if true
                     * @return array - array representing the difference of the two arrays above
                     */
                    function getArraysDiff2(array $array1, array $array2, $noDuplic = false) :array{
                        $result = array_diff($array1, $array2);
                        if ($noDuplic) {
                            var_dump($noDuplic);
                            $result = excludeDuplicates($result);
                        }
                        return $result;
                    }
                    var_dump(getArraysDiff2($arrayA, $arrayB, true));
                ?>
            </div>
        </section>


        <!-- QUESTION 9 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 9</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau et un entier et retourne les n premiers éléments du tableau.</p>
            <div class="exercice-sandbox">
                <?php
                    /**
                     * Undocumented function
                     * Gets the "n" first elements of an array
                     * @param array $array
                     * @param integer $n
                     * @return array - array filled with the "n" first elements of the array
                     */
                    function getFirstElements(array $array, int $n) :array {
                        for ($i = 0; $i < $n; $i++) {
                            $result[] = $array[$i];
                        }
                        return $result;
                    }
                    var_dump(getFirstElements($arrayA, 4));
                ?>
            </div>
        </section>
    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>

</html>