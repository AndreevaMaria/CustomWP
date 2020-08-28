    <div class="col-sm-3">
        <div class="sidebar-module">
            <h4>About</h4>
            <p><?php the_author_meta('display_name')?></p>
        </div>
        <div class="sidebar-module">
            <h4>Archive</h4>
            <ol class="list-unstyled">
                <p><?php wp_get_archives('type=daily')?></p>
            </ol>
        </div>
        <div class="sidebar-module">
            <a href="<?php echo wp_logout_url( home_url() ); ?>" title="Выход">Выход</a>
        </div>
    </div>
</div>

