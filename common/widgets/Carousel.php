<?php

namespace common\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class Carousel extends Widget
{
    public $items = [];
    public $options = [];

    public function run()
    {
        // Verifica se existem itens no carousel
        if (empty($this->items)) {
            return '';
        }

        // Gera o código HTML para o carousel
        $content = Html::beginTag('div', ['class' => 'carousel slide', 'data-bs-ride' => 'carousel']);
        $content .= $this->renderIndicators();
        $content .= $this->renderItems();
        $content .= $this->renderControls();
        $content .= Html::endTag('div');

        return $content;
    }

    protected function renderIndicators()
    {
        $indicators = '';
        $count = count($this->items);

        if ($count > 1) {
            $indicators .= Html::beginTag('ol', ['class' => 'carousel-indicators']);

            for ($i = 0; $i < $count; $i++) {
                $options = ['data-bs-target' => '.carousel', 'data-bs-slide-to' => $i];
                if ($i === 0) {
                    $options['class'] = 'active';
                }
                $indicators .= Html::tag('li', '', $options);
            }

            $indicators .= Html::endTag('ol');
        }

        return $indicators;
    }

    protected function renderItems()
    {
        $items = '';

        foreach ($this->items as $index => $item) {
            $options = ['class' => 'carousel-item'];
            if ($index === 0) {
                $options['class'] .= ' active';
            }

            $items .= Html::beginTag('div', $options);
            $items .= Html::img($item['image'], ['class' => 'd-block w-100', 'alt' => $item['alt']]);
            if (!empty($item['caption'])) {
                $items .= Html::tag('div', $item['caption'], ['class' => 'carousel-caption d-none d-md-block']);
            }
            $items .= Html::endTag('div');
        }

        return Html::beginTag('div', ['class' => 'carousel-inner']) . $items . Html::endTag('div');
    }

    protected function renderControls()
    {
        $controls = '';

        if (count($this->items) > 1) {
            $controls .= Html::a('', '.carousel', ['class' => 'carousel-control-prev', 'role' => 'button', 'data-bs-slide' => 'prev']);
            $controls .= Html::span('', ['class' => 'carousel-control-prev-icon', 'aria-hidden' => 'true']);
            $controls .= Html::span('Previous', ['class' => 'visually-hidden']);
            $controls .= Html::a('', '.carousel', ['class' => 'carousel-control-next', 'role' => 'button', 'data-bs-slide' => 'next']);
            $controls .= Html::span('', ['class' => 'carousel-control-next-icon', 'aria-hidden' => 'true']);
            $controls .= Html::span('Next', ['class' => 'visually-hidden']);
        }

        return $controls;
    }
}
