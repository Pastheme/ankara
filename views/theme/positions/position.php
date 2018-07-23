<?php foreach ($widgets as $widget): ?>

  <?php
  $positionConf = [];

  array_push($positionConf , [
    'uk-section' ,
    $widget->theme['section_color'],
    $widget->theme['height'],
    $widget->theme['text_color']
  ]);

  if (!empty($widget->theme['section_bg']['src'])) {
    array_push($positionConf, [
      "bg"    => 'uk-background-image',
      "blend" => $widget->theme['section_bg']['blend'],
      "size"  => $widget->theme['section_bg']['size'],
      "fixed" => $widget->theme['section_bg']['fixed'] === true ? 'uk-background-fixed':'',
    ]);

    $data_src = 'data-src=" ' . $widget->theme['section_bg']['src'] . ' " uk-img';

  }else{
    array_push($positionConf , ["not" => true]);
  }
  ?>

  <div class="<?= implode(' ', array_values($positionConf[0])) ?> <?= isset($positionConf[1]) ? implode(' ', array_values($positionConf[1])):'' ?> " <?= !isset( $positionConf[1]['not'] )? $data_src :''  ?>>

    <div class="<?= $params['content'] ?>">

      <?php if ($widget->theme['title_hide'] == false): ?>
        <h3><?= $widget->title ?></h3>
      <?php endif; ?>

      <?= $widget->get('result') ?>

    </div>

  </div>

<?php endforeach; ?>
