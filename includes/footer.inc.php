<?php
function romanNumerals($num)
{
    $n = intval($num);
    $res = '';

    // roman_numerals array
    $roman_numerals = array(
                'M'  => 1000,
                'CM' => 900,
                'D'  => 500,
                'CD' => 400,
                'C'  => 100,
                'XC' => 90,
                'L'  => 50,
                'XL' => 40,
                'X'  => 10,
                'IX' => 9,
                'V'  => 5,
                'IV' => 4,
                'I'  => 1);

    foreach ($roman_numerals as $roman => $number)
    {
        // divide to get  matches
        $matches = intval($n / $number);

        // assign the roman char * $matches
        $res .= str_repeat($roman, $matches);

        // substract from the number
        $n = $n % $number;
    }

    return $res;
    }
?>

<footer>
  <ul>
    <li>
        <a href="http://www.linkedin.com/in/giffordnowland" style="border-bottom:none; text-decoration:none;" target="_blank">
            <img src="https://static.licdn.com/scds/common/u/img/logos/logo_linkedin_92x22.png" width="92" height="22" border="0" style="background-color:#ffffff; -moz-border-radius: 2px; -webkit-border-radius: 2px; border-radius: 2px; padding: 2px;" alt="View Gifford Nowland's profile on LinkedIn">
        </a>
    </li>
    <li>
      <p>&copy; A.D. <?php $year = date('Y'); echo romanNumerals($year); ?> Gifford Nowland</p>
    </li>
    <li>
      <nav>
        <a href="#top" class="scrollto"><span>&uarr; Beam me up &uarr;</span></a>
      </nav>
    </li>
  </ul>
</footer>