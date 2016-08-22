<?php exit; ?>
1471886499
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (ufg0nqx0i_moderator_cache m) LEFT JOIN ufg0nqx0i_users u ON (m.user_id = u.user_id) LEFT JOIN ufg0nqx0i_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}