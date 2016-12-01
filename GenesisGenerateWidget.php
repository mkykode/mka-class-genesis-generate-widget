<?php

/**
 * Generates Sidebar with Genesis. Requires Genesis to be loaded.
 */
class GenesisGenerateWidget {
	private $page_slug;
	private $number;
	private $extra_classes;

	public function __construct( string $page_slug, int $number, string $extra_classes ) {
		$this->page_slug    = $page_slug;
		$this->number        = $number;
		$this->extra_classes = $extra_classes;

	}

	public function generate_widget() {
		genesis_widget_area( $this->page_slug . '-' . $this->number, array(
			'before' => '<div id="' . $this->page_slug . '-' . $this->number . '" class="' . $this->page_slug . '-' . $this->number . ' "><div class="' . $this->extra_classes . '"><div class="wrap">',
			'after'  => '</div></div></div>',
		) );

	}

}