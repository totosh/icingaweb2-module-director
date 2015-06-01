<?php

$section = $this->menuSection($this->translate('Icinga Director'));

$section->setIcon('cubes');
$section->add($this->translate('Zones'))
    ->setUrl('director/list/zones');
$section->add($this->translate('Commands'))
    ->setUrl('director/list/commands');
$section->add($this->translate('Command Arguments'))
    ->setUrl('director/list/commandarguments');
$section->add($this->translate('Hosts'))
    ->setUrl('director/list/hosts');
$section->add($this->translate('Users'))
    ->setUrl('director/list/users');
$section->add($this->translate('Activity Log'))
    ->setUrl('director/list/activitylog')
    ->setPriority(900);
