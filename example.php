<?php
/**Usage example.
reads in the hole database and prints male and female profession-title as html-table.

Copyright of the datalist : agentur für arbeit
*/

$needle = array( //
  "m"=> "/\/Anwältin|\/Ärztin|\/Direktrice|Hebamme|Kaltmamsell|Köchin|Mannequin|Schwester\/|\/anwältin|\/ärztin|\/dame|\/direktrice|\/köchin|\/mutter|\/schwester|\/girl|\/frau|\/u*se|\/ess|\/wo\/|\/ette|\/ière|\/e$|(\/e)\s|\/in|\//u",//
  "f" =>"/Anwalt\/|Arzt\/|Direkteur\/|Dressman\/|Gardemanger|Koch|\/Pfleger|Entbindungspfleger|\/anwalt|\/arzt|\/direkteur|\/keeper|\/koch|\/pfleger|\/vater|\/man\/|\/mann\/|\/ier\/|\/er\/|\/r|\/e\/|\//u"//
  );

print "<html><head><meta charset='utf-8'/></head><body><table>".PHP_EOL;

$lines = file("job.csv");
foreach($lines as $string)
{
  $pm = preg_replace($needle["m"],"",trim($string));
  $pf = preg_replace($needle["f"],"",trim($string));
  print "<tr><td>".$pm."</td><td>".$pf."</td></tr>".PHP_EOL;
}
print "</table></body></html>";
