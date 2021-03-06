<?php
if(!$this->session->userdata('vdfbcurl_connect')){
	redirect(site_url());
	exit();
}
?>
<!--[if lte IE 8]><div id="identity"><![endif]--><!--[if gt IE 8]><!--><section id="identity"><!--<![endif]-->
	<p class="personal">Utilisateur <?php echo $infos->auteur; ?></p>
	<p class="img_container"><?php $filename=IMG_DIR.'avatar'.$infos->auteur.'.jpg';
		if(file_exists('./'.$filename)){ ?>
			<img src="<?php echo base_url().$filename; ?>" alt="Mon avatar" />
<?php 	}else{ ?>
			<img src="<?php echo base_url().IMG_DIR.'avatar.jpg'; ?>" alt="Mon avatar" />
<?php	} ?>
	</p>
	<h2><?php echo $infos->nom.'<span>'.$infos->pseudo.'</span>'; ?></h2>
	<a class="btn_gray rightspace" href="<?php echo site_url(); ?>/user/deconnecter" title="Se déconnecter">Se déconnecter</a>
<!--[if lte IE 8]></div><![endif]--><!--[if gt IE 8]><!--></section><!--<![endif]-->
<?php
 echo form_open(site_url().'/article/modifier',array('method'=>'post','id'=>'curl')); ?>
	<h2><span>Publication&nbsp;: </span>Modifier la publication</h2>
	<div class="toolbar">
		<p id="curl_url"><?php echo $url; ?></p>
		<a href="<?php echo site_url(); ?>/article/lister/circle">Annuler</a>
		<label>
			<select name="partage" title="Qui peut voir cette publication">
			<?php switch ($partage) {
				case 0:
					echo '<option selected="selected" value="0">Privé</option><option value="1">Amis</option><option value="2">Public</option>';break;
				case 1:
					echo '<option value="0">Privé</option><option selected="selected" value="1">Amis</option><option value="2">Public</option>';break;
				case 2:
					echo '<option value="0">Privé</option><option value="1">Amis</option><option selected="selected" value="2">Public</option>';break;
			}
			?>
			</select>
			<span>&nabla;</span>
		</label>
		<button type="submit">Modifier</button>
	</div>
	<div class="curl_content">
<?php 	if((isset($images) && count($images)) || isset($image)){ ?>
			<p class="img_container">
<?php			if(isset($image)){ ?>
					<img src="<?php echo $image; ?>" alt="" />
					<input id="img_input" type="hidden" name="image" value="<?php echo $image; ?>" />
					<input class="img_gallery" type="hidden" name="urlimg" value="<?php echo $image; ?>" />
<?php			}elseif((isset($images))){ ?>
					<img src="<?php echo $images[0]; ?>" alt="" />
					<input class="img_input" type="hidden" name="image" value="<?php echo $images[0]; ?>" />
<?php			}
				if((isset($images))){
					foreach($images as $img){ ?>
						<input class="img_gallery" type="hidden" value="<?php echo $img; ?>" />
<?php 				}
				}?>
				<button id="prev"><</button>
				<button id="next">></button>
			</p>
<?php	} ?>
		<input type="text" name="titre" value="<?php echo $titre; ?>" /><br />
		<textarea name="description"><?php echo $description; ?></textarea>
		<input type="hidden" name="url" value="<?php echo $url;?>" />
		<input type="hidden" name="id" value="<?php echo $id;?>" />
	</div>
<?php echo form_close(); ?>