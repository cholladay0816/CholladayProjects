<div class='container my-3'>

<h1>Zergbot2</h1>
<p class='text-muted'>
  Created: Date
  <br />
  <a href="<?php echo URLROOT?>/download/zergbot2/zergbot2.zip" class='text-muted'>
    <small>Download</small>
  </a>
</p>
<h3>Summary</h3>
This AI's goal is to win against Terran in a 1v1 without using any cheese or overpowered tactics.
This is intended to be done by estimating the army's combined units to figure out which units to counter with.
<h3>Implementation</h3>
<p>
The program estimates a strength value of the enemy team based on health, damage, air vs ground, and armor vs bio.
The zerg will build up units until it discovers an army value, and will then build up enough to comfortably be above this amount,
all the while constantly scouting with cheap units like workers and zerglings.
The previous version touched on the concepts of army value estimation towards the end, but a rework was needed to realize it in this script.
This implementation is a good start, but not every feature of the older script is implemented, such as Queens and Creep spread,
which greatly hurt its production and map control. Expansions are much better, and the early game is almost perfect.
This program also puts more of a focus on micro, with the AI having each roach burrow when sufficiently hurt and re-emerge when healed.
</p>
<h3>Results</h3>
<p>
In practice, the bot consistently wins against the computer at every difficulty until Harder, where the computer does a more effective job of countering, and the AI results to spamming cheap units to desperately raise its army value, adding to the Terran snowball. This bot does not -- at the time of writing -- support queens, unlike the first version which would spawn queens to spread creep and boost larvae production. Feel free to take this script and experiment with some of the concepts and ideas. I plan on releasing an updated version when I have the time now that I've learned more about the game's mechanics, counters and strategies.
</p>

</div>
