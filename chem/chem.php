<?php
   
   
echo    "<table class="chem">";
echo      "<tr>";
echo          "<th colspan="12">ВХР энергоблоков КТЦ-200</th>";
echo      "</tr>";
echo      "<tr>";
echo            "<td id="name">Энергоблок</td>";
echo            "<td id="name">Эл-пр. ПВ,<div>мкСм/см</td>";
echo            "<td id="name">С/с ПВ для<div>ВХР,<div>мг/дм3</td>";
echo            "<td id="name">Эл-пр. ОП,<div>мкСм/см</td>";
echo            "<td id="name">рН ПВ</td>";
echo            "<td id="name">рН ОП</td>";
echo            "<td id="name">рNa ОП</td>";
echo            "<td id="name">ФСД</td>";
echo            "<td id="name">Q на<div>ФСД,<div>т/ч</td>";
echo            "<td id="name">Q на взр.<div>ФСД,<div>т/ч</td>";
echo            "<td id="name">ЭМФ</td>";
echo            "<td id="name">Q на ФСД,<div>т/ч</td>";
echo        "</tr>";
echo        "<tr>";
echo            "<td rowspan="2" id="name">К-11</td>";
echo            "<td rowspan="2"></td>";
echo            "<td rowspan="2"></td>";
echo            "<td rowspan="2"></td>";
echo            "<td rowspan="2"></td>";
echo            "<td rowspan="2"></td>";
echo            "<td rowspan="2"></td>";
echo            "<td id="name">6А</td>";
echo            "<td></td>";
echo           "<td></td>";
echo            "<td rowspan="2" id="name">Бл. 6</td>";
echo            "<td rowspan="2"></td>";
echo        "</tr>";
echo       "<tr>";
echo           "<td id="name">6Б</td>";
echo           "<td></td>";
echo          "<td></td>";
echo      "</tr>";
echo      "<tr>";
echo         "<td rowspan="2" id="name">К-12</td>";
echo          "<td rowspan="2"></td>";
echo          "<td rowspan="2"></td>";
echo          "<td rowspan="2"></td>";
echo          "<td rowspan="2"></td>";
echo          "<td rowspan="2"></td>";
echo          "<td rowspan="2"></td>";
echo          "<td id="name">7А</td>";
echo          "<td></td>";
echo          "<td></td>";
echo           "<td rowspan="2" id="name">Бл. 7</td>";
echo           "<td rowspan="2"></td>";
echo       "</tr>";
echo       "<tr>";
echo           "<td id="name">7Б</td>";
echo          "<td></td>";
echo          "<td></td>";
echo      "</tr>";
echo      "<tr>";
echo           "<td id="name">К-13А</td>";
echo           "<td rowspan="2"></td>";
echo          "<td rowspan="2"></td>";
echo          "<td></td>";
echo           "<td rowspan="2"></td>";
echo           "<td></td>";
echo           "<td></td>";
echo          "<td id="name">8А</td>";
echo          "<td></td>";
echo          "<td></td>";
echo          "<td rowspan="2" id="name">Бл. 8</td>";
echo           "<td rowspan="2"></td>";
echo       "</tr>";
echo      "<tr>";
echo          "<td id="name">К-13Б</td>";
echo           "<td></td>";
echo           "<td></td>";
echo           "<td></td>";
echo           "<td id="name">8Б</td>";
echo           "<td></td>";
echo           "<td></td>";
echo       "</tr>";
echo      "<tr>";
echo          "<td id="name">К-14А</td>";
echo           "<td rowspan="2"></td>";
echo           "<td rowspan="2"></td>";
echo           "<td></td>";
echo           "<td rowspan="2"></td>";
echo          "<td></td>";
echo          "<td></td>";
echo          "<td id="name">9А</td>";
echo           "<td></td>";
echo          "<td></td>";
echo           "<td rowspan="2" id="name">Бл. 9</td>";
echo          "<td rowspan="2"></td>";
echo      "</tr>";
echo      "<tr>";
echo          "<td id="name">К-14Б</td>";
echo           "<td></td>";
echo          "<td></td>";
echo          "<td></td>";
echo          "<td id="name">9Б</td>";
echo          "<td></td>";
echo          "<td></td>";
echo       "</tr>";
echo   "</table>";
/*
echo   <br>


echo   <table class="chem">
echo      <tr>
echo          <th colspan="4">ВХР энергоблоков КТЦ-100</th>
echo          <th colspan="4">Реагентные хозяйства</th>
echo      </tr>
echo       <tr>
echo           <td  id="name"></td>
echo           <td id="name">Солесожержание <div> Ч.О., мг/дм3</td>
echo           <td id="name">Солесожержание <div> C.О., мг/дм3</td>
echo           <td id="name">Н/продувка, т/ч</td>
echo           <td colspan="2" id="name">ГАХ</td>
echo           <td colspan="2" id="name">Кислотное хозяйство</td>
echo      </tr>
echo      <tr>
echo           <td id="name">К-1</td>
echo          <td></td>
echo          <td></td>
echo           <td></td>
echo           <td id="name">Н БА конц., м</td>
echo           <td></td>
echo           <td id="name">Н БХК №1, м</td>
echo          <td></td>
echo       </tr>
echo      <tr>
echo           <td id="name">К-2</td>
echo           <td></td>
echo           <td></td>
echo          <td></td>
echo          <td id="name">Н емкости аварийного <div> слива NH4OH, м</td>
echo           <td></td>
echo          <td id="name">Н БХК №2, м</td>
echo          <td></td>
echo      </tr>
echo      <tr>
echo          <td id="name">К-3</td>
echo          <td></td>
echo           <td></td>
echo           <td></td>
echo           <td id="name">Н БГ  1</td>
echo         <td></td>
echo           <td id="name">Н емкости аварийного <div> слива H2SO4, м</td>
echo           <td></td>
echo       </tr>
echo       <tr>
echo           <td id="name">К-4</td>
echo           <td></td>
echo           <td></td>
echo           <td></td>
echo           <td id="name">Н БГ №2, м</td>
echo          <td></td>
echo          <td colspan="2" id="name">Щелочное хозяйство</td>
echo       </tr>
echo       <tr>
echo           <td id="name">К-5</td>
echo           <td></td>
echo           <td></td>
echo           <td></td>
echo           <td id="name">V БМА №1, м3</td>
echo         <td></td>
echo          <td id="name">Н БХЩ №1, м</td>
echo          <td></td>
echo      </tr>
echo      <tr>
echo          <td id="name">К-6</td>
echo           <td></td>
echo           <td></td>
echo           <td></td>
echo           <td id="name">V БМА №2, м3</td>
echo           <td></td>
echo           <td id="name">Н БХЩ №2, м</td>
echo           <td></td>
echo       </tr>
echo       <tr>
echo           <td id="name">К-7</td>
echo           <td></td>
echo           <td></td>
echo           <td></td>
echo           <td id="name">Н БРРА, м</td>
echo           <td></td>
echo           <td id="name">Н БХЩ №4, м</td>
echo           <td></td>
echo       </tr>
echo       <tr>
echo           <td id="name">К-8</td>
echo          <td></td>
echo           <td></td>
echo           <td></td>
echo           <td id="name">Н БРРГ, м</td>
echo          <td></td>
echo          <td id="name">Н емкости аварийного <div> слива NaOH, м</td>
echo          <td></td>
echo      </tr>
echo      <tr>
echo           <td id="name">К-9</td>
echo           <td></td>
echo           <td></td>
echo           <td></td>
echo           <td id="name">V БРРА, м3</td>
echo           <td></td>
echo           <td></td>
echo          <td></td>
echo      </tr>
echo       <tr>
echo           <td id="name">К-10</td>
echo           <td></td>
echo           <td></td>
echo           <td></td>
echo           <td id="name">V БРРГ, м3</td>
echo          <td></td>
echo          <td></td>
echo          <td></td>
echo       </tr>
echo   </table>
*/
?>