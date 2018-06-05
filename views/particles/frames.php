<?php /** @var \App\FramesInterface $this */ ?>
<?php foreach ($this->getFrames() as $frame): ?>
    <div style="width:<?= $frame->getSize()->getWight(); ?>px;height:<?= $frame->getSize()->getHeight() ?>px;position:absolute;left:<?= $frame->getPosition()->getX(); ?>px;top:<?= $frame->getPosition()->getY(); ?>px;background:rgb(<?= $frame->getColor()->getRed(); ?>,<?= $frame->getColor()->getGreen(); ?>,<?= $frame->getColor()->getBlue(); ?>)"></div>
<?php endforeach; ?>