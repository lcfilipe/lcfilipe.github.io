<?php
/* Gera a barra de rodapé
   Categorias: HOME, RESEARCH, TEACHING, PERSONAL, OTHER
*/
function make_footer($category,$language) {
  if ($category == "OTHER")
    $TOPDIR = "../";
  else
    $TOPDIR = "";


  print '<div class="botbar">';
  print '<table id="menu"><tr>';
  print "\n";

  print "<td rowspan=\"2\"><a href=\"http://validator.w3.org/check?uri=referer\">";
  print "<img style=\"border:0;width:88px;height:31px\" src=\"".$TOPDIR."valid-xhtml10.gif\" alt=\"Valid XHTML 1.0 Strict\" />";
  print "</a></td>";

  // HOME
  print '<td>';
  if ($category == "HOME")
    print '<a class="estacategoria"';
  else
    print '<a';
  if ($language=="ENGLISH")
    print ' href="'.$TOPDIR.'index.html">Home</a>';
  else
    print ' href="'.$TOPDIR.'index.html">Início</a>';
  print '</td>';
  print "\n";

  // RESEARCH
  print '<td>';
  if ($category == "RESEARCH")
    print '<a class="estacategoria"';
  else
    print '<a';
  if ($language=="ENGLISH")
    print ' href="'.$TOPDIR.'research.html">Research</a>';
  else
    print ' href="'.$TOPDIR.'research.html">Investigação</a>';
  print '</td>';
  print "\n";

  // TEACHING
  print '<td>';
  if ($category == "TEACHING")
    print '<a class="estacategoria"';
  else
    print '<a';
  if ($language=="ENGLISH")
    print ' href="'.$TOPDIR.'teaching.html">Teaching</a>';
  else
    print ' href="'.$TOPDIR.'teaching.html">Ensino</a>';
  print '</td>';
  print "\n";

  // PERSONAL
  print '<td>';
  if ($category == "PERSONAL")
    print '<a class="estacategoria"';
  else
    print '<a';
  if ($language=="ENGLISH")
    print ' href="'.$TOPDIR.'personal.html">Personal</a>';
  else
    print ' href="'.$TOPDIR.'personal.html">Pessoal</a>';
  print '</td>';

  print "<td rowspan=\"2\"><a href=\"http://jigsaw.w3.org/css-validator/\">";
  print "<img style=\"border:0;width:88px;height:31px\" src=\"".$TOPDIR."vcss.gif\" alt=\"Valid CSS!\" />";
  print "</a></td>";

  print "\n";
  print '</tr>';
  print "\n";
  print '<tr>';
  print "\n";
  print "<td colspan=\"4\">";
  if ($language=="ENGLISH")
    print "Suggestions or comments: <b>lcfilipe</b> thingy <b>gmail.com</b>";
  else
    print "Sugestões e comentários: <b>lcfilipe</b> macacóide <b>gmail.com</b>";
  print "</td>";
  print '</tr>';
  print '</table>';
  print '</div>';
}
?>
