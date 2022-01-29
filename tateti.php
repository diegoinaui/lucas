<?php
$table = [
  [-1, -1, -1],
  [-1, -1, -1],
  [-1, -1, -1]
];
?>
<table height="100" width="100" bordercolor="#111111" style="border-collapse: collapse; border-style: hidden;">
  <?php
  for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
      echo '<td style="border: 5px solid black;text-align: center;">';
      switch ($table[$i][$j]) {
        case 0:
          echo "O";
          break;
        case 1:
          echo "X";
          break;
        default:
          echo '&nbsp;&nbsp;';
          break;
      }
      echo '</td>';
    }
    echo "</tr>";
  }
  ?>
  <!-- <tr>
    <td style="border: 5px solid black; text-align: center;">O</td>
    <td style="border: 5px solid black; text-align: center;">X</td>
    <td style="border: 5px solid black;text-align: center;">&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td style="border: 5px solid black;text-align: center;">&nbsp;&nbsp;&nbsp;</td>
    <td style="border: 5px solid black;text-align: center;">&nbsp;&nbsp;&nbsp;</td>
    <td style="border: 5px solid black;text-align: center;">&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td style="border: 5px solid black;text-align: center;">&nbsp;&nbsp;&nbsp;</td>
    <td style="border: 5px solid black;text-align: center;">&nbsp;&nbsp;&nbsp;</td>
    <td style="border: 5px solid black;text-align: center;">&nbsp;&nbsp;&nbsp;</td>
  </tr> -->

</table>