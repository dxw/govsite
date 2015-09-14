# dxw/pagination

## Installation

    composer require dxw/pagination=dev-master

## Usage

    <?php
    $pagination = new \Dxw\Pagination($paged, $max, 2, 1, function ($n) use ($args) { $args['paged'] = $n; return add_query_arg($args, get_bloginfo('url')); });
    ?>
    ...
    <?php echo $pagination->render() ?>
