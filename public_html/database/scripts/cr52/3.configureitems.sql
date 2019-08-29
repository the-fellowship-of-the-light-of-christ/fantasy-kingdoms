

INSERT INTO `cfgitems` (`id`, `church_id`, `tag`, `parenttag`, `name`, `description`, `requiredstrength`, `price`, `parentcategory`, `category`, `subcategory`, `mindmg`, `maxdmg`, `bluntperc`, `cutperc`, `reach`, `armorpenetration`, `critical`, `text`, `defense`, `part`, `coverage`, `size`, `weight`, `droppable`, `takeable`, `stealable`, `marketsellable`, `structuresellable`, `canbesent`, `destroyontrash`, `trashable`, `canbedonated`, `taxable`, `confiscable`, `colorable`, `crafting_slot`, `craftingenabled`, `car_modifier`, `linked_role`, `spare1`, `spare2`, `spare3`, `spare4`, `spare5`, `spare6`, `spare7`, `wearfactor`) VALUES (NULL, NULL, 'chainmail_armor_legs', 'chainmail_armor', 'items.chainmail_armor_legs_name', 'items.chainmail_armor_legs_description', NULL, 0, 'armors', 'armor', 'armor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3.00, 'legs', 'legs', NULL, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 0, 100, 1, 2, NULL, NULL, '504', NULL, NULL, '1', '1', '', 1);

update cfgitems set price =0, tag = 'chainmail_armor_body', parenttag = 'chainmail_armor', name = 'items.chainmail_armor_body_name', description = 'items.chainmail_armor_body_description' where tag = 'chainmail';

INSERT INTO `cfgitems` (`id`, `church_id`, `tag`, `parenttag`, `name`, `description`, `requiredstrength`, `price`, `parentcategory`, `category`, `subcategory`, `mindmg`, `maxdmg`, `bluntperc`, `cutperc`, `reach`, `armorpenetration`, `critical`, `text`, `defense`, `part`, `coverage`, `size`, `weight`, `droppable`, `takeable`, `stealable`, `marketsellable`, `structuresellable`, `canbesent`, `destroyontrash`, `trashable`, `canbedonated`, `taxable`, `confiscable`, `colorable`, `crafting_slot`, `craftingenabled`, `car_modifier`, `linked_role`, `spare1`, `spare2`, `spare3`, `spare4`, `spare5`, `spare6`, `spare7`, `wearfactor`) VALUES (NULL, NULL, 'chainmail_armor_feet', 'chainmail_armor', 'items.chainmail_armor_feet_name', 'items.chainmail_armor_feet_description', NULL, 0, 'armors', 'armor', 'armor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3.00, 'feet', 'feet', NULL, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 0, 100, 1, 2, NULL, NULL, '504', NULL, NULL, '1', '1', '', 1);

update cfgitems set tag = 'chainmail_armor_head', parenttag = 'chainmail_armor', name = 'items.chainmail_armor_head_name', description = 'items.chainmail_armor_head_description' where tag = 'iron_helmet_1';


update cfgitems set part = 'torso' where part = 'armor';
