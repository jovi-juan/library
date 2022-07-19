<?php 
$stealthMode=(get_theme_option('stealth_mode')==1)&&(is_allowed('Items', 'edit')!==true) ? true : false;
$classname='home'.($stealthMode ? ' stealth' : null);
if ($stealthMode) queue_css_file('stealth');
	echo head(array('maptype'=>'focusarea','bodyid'=>'home','bodyclass'=>$classname)); 
?>
<?php
if ($stealthMode){
	include_once('stealth-index.php');
}
else{
//if not stealth mode, do everything else
?>	
	<style>
		.map {
			display:none;
		}
	</style>

	<div id="content" role="main">
	<section class="big-image-holder-j">
		<img src="/images/front-image.jpg" class="big-image-j"></img>
		<div class="caption on-photo-right">Library of San Pablo (San Agustin) Convent. Photo from 1880.</div>
	</section>
	<section class="map">
		<!--
		<h2 hidden class="hidden"><?php echo __('Map');?></h2>
		<nav aria-label="<?php echo __('Skip Interactive Map');?>"><a id="skip-map" href="#homepage"><?php echo __('Skip Interactive Map');?></a></nav>
		<figure>
			<?php echo mh_map_type('focusarea',null,null); ?>
		</figure>
		-->
		
	</section>	
	<article id="homepage" class="page show">
		<!--<?php echo homepage_widget_sections();?>-->
		<section id="about"><div class="about-text"><article><header><flashline><a href="/prototype">This is a Prototype »</a></flashline><h2>A Digital Repatriation of a Lost Archive of the Spanish Pacific: The Library of The Convent of San Pablo (Manila, 1762)</h2><span class="sponsor">A project by <span class="sponsor-name">Repatriating a Lost Archive of the Spanish Pacific</span></span></header><div class="about-main"><p>From 1607 to 1762, the library on the upper level of the cloister of the Convent of San Pablo in
Manila was a quiet repository of more than 1,500 rare manuscripts, maps and early printed
materials relating to the Philippines and other regions of Asia the Spanish missionaries dreamed
of converting to Christianity. During the British siege of Manila, the treasures of the Convent of
San Pablo were ransacked and its library collection pillaged. The items were sorted and picked
through, some auctioned off on site and others left behind. Towards the end of the British
occupation, the majority of the materials from the San Pablo library ended up in the hands of the
Scottish Hydrographer, Alexander Dalrymple (1737-1808) who very briefly became the
Governor General of the Islands as he replaced the notorious Dawsonne Drake. When Dalrymple
died without an heir, his huge collection of books and manuscripts was auctioned off, among
them what are now called "the Manila Papers." From this mother lode began the slow dispersal
coming out of the United Kingdom through a series of auctions that caused the collection to be
fragmented in three continents. Today only about a hundred items are located in the original site.
The rest of the San Pablo collection can be found interspersed among the Lilly Library at Indiana
University, the Lopez Museum in Manila, the British Library, SOAS University of London, and
King's College.</p>
<p>This digital humanities project seeks to repatriate the books and manuscripts that were taken
from the archives of the Convent of San Pablo. Using the original index of the contents of the
library of San Pablo, the Spanish and British accounts of the use and dispersal of the library's
contents, the records of auctions, library acquisitions and provenance records, the project will
piece together a virtual reconstruction of the materials in the library as close to as it might have
been in 1762.</p>
<p>
Going beyond the digital reconstitution of the archival corpus, the "return" of the library to its
original site is re-imagined to include the reconceptualizing of the library's original systems of
knowledge production, modes of access, and use. This virtual archive will serve as an entry point
to the study of Spanish colonialism in the Pacific and the experience of the communities it
affected, especially in the Philippines. Using digital technologies that explore iterative
scholarship, inter-institutional collaboration and curated crowd-sourcing, the regenerated library
will include spaces for transcribing, translating and annotating the materials.</p><a class="button u-full-width" href="/about">Read more About Us</a></div></article></div></section>
		
	</article>
	
	<article id="homepage" class="page show">
		<section id="search-lower">
		<form id="header-search-form" action="/items/browse?sort_field=relevance" method="get">
			<fieldset>
				<input type="text" name="search" id="lower-search" value="" aria-label="Search - Top" class="textinput search" placeholder="SEARCH THE ARCHIVE">
				<input type="hidden" name="sort_field" value="relevance" id="header-search-relevance">
		<input type="submit" class="submit submit-lower" name="submit_header-search" id="submit_search_advanced_header-search" value="GO">
			</fieldset>
		
		</form>
		</section>
		<section id="home-tours-j"><h3 class="result-type-header">Featured Exhibits</h3>
			<div class="item-j">
					<a href="/items/show/214"><img src="/images/marginalia-sm.jpg" class="item-j-img" align="left"></a>
					<p><a href="/items/show/214">A Monk's Marginalia</a> <br />Did the friars doodle? Yes they did, and what they sketched out and commented on gives real insight into the minds of these early missionaries</p>
			</div>
	
		</section>
		<section id="featured-stories-j"><h3 class="result-type-header">Featured Items</h3>
			
				<div class="item-j">
					<a href="/items/show/214"><img src="/files/thumbnails/a14091033c85aa0d4b5c1c845d722fda.jpg" class="item-j-img" align="left"></a>
					<p><a href="/items/show/214">The Index of the Items in the San Pablo Library (1762)</a> <br />Last updated by its Librarian, Fray Agustin Maria de Castro in May 1762 before the content of the Library was dispersed.</p>
				</div>
		
		</section>
		<section id="cta-transcribe-j"><h3 class="result-type-header">Help us transcribe</h3>
			
				<div class="item-j">
					<a href="/items/show/214"><img src="/files/thumbnails/b5acb157ef039a4005ec9493369efa27.jpg" class="item-j-img"></a>
					<p>Transcription is an important component of the project. <strong>Contribute to our crowd-sourced effort!</strong><br /><a class="button button-primary" href="#">Help transcribe</a></p>
				</div>
			</a>
	
		</section>
	</article>
	</div> <!-- end content -->

<!--
<div class="featured-decora-text"><div class="featured-decora-text-inner"><header><h3><a href="/items/show/214"></a><a href="/items/show/214" class="permalink">Inventarium Generale Omnium Librorum huius Bibliothecae Conventus Divi Pauli Manilensis Ord. Ermitarum S.P.S. August. in hac Provintia SS Nominis JESU Philipinarum</a></h3><span class="featured-item-author"><div class="byline">By <a href="/items/browse?search=&amp;advanced[0][element_id]=39&amp;advanced[0][type]=is+exactly&amp;advanced[0][terms]=Gaspar de San Agustin">Gaspar de San Agustin</a></div></span></header><div class="item-description">Preview text not available.</div></div></div>
-->

<?php
//end stealth mode else statement
}?>



<?php echo foot(); ?>