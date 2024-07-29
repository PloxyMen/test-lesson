<?php

$title = 'My blog :: Home';

$post = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur autem culpa
          cupiditate debitis deleniti dolor dolorem doloremque et, eum ex id nulla, quasi quibusdam
          ratione reiciendis rerum soluta tenetur.</p>
          <p>Accusamus asperiores beatae consectetur consequuntur corporis cum cumque dicta dolorem eaque
          error expedita, fuga fugiat id itaque iusto laborum nam necessitatibus nobis numquam odit porro
          praesentium qui repellendus saepe, veritatis!</p>
          <p>Beatae commodi deserunt doloribus est molestiae perspiciatis qui quo repudiandae ut veritatis.
          Adipisci animi assumenda deserunt distinctio eligendi est illo illum impedit iure, modi nesciunt
          `pariatur quam quidem quod rerum!</p>';

$recent_posts = [
    1=>[
        'title'=>'An item',
        'slug'=>lcfirst(str_replace('','-','An item')),
    ],
    2=>[
        'title'=>'A second item',
        'slug'=>lcfirst(str_replace('','-','A second item')),
    ],
    3=>[
        'title'=>'A third item',
        'slug'=>lcfirst(str_replace('','-','A third item')),
    ],
    4=>[
        'title'=>'A fourth item',
        'slug'=>lcfirst(str_replace('','-','A fourth item')),
    ],
    5=>[
        'title'=>'And a fifth one',
        'slug'=>lcfirst(str_replace('','-','And a fifth one')),
    ],

];

require_once 'about.tpl.php';



