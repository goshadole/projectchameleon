
<div class="navbar navbar-inverse navbar-static-top">
  <div class="navbar-inner" style="-webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0;">
    <div class="container">

 
<div class="span2 menutab products">
				<?php $this->widget('application.extensions.wsmenu.wsmenu', array(
					'categories'=> Category::GetTree(),
					'menuheader'=> Yii::t('global','Products'),
					'showarrow'=>true,
				)); //products dropdown menu ?>
			</div>

	<div class="span6">
			<?php if (count(CustomPage::model()->toptabs()->findAll()))
				$this->widget('zii.widgets.CMenu', array(
				'id'=>'menutabs',
				'itemCssClass'=>'menutab'.round(12/count(CustomPage::model()->toptabs()->findAll())),
				'items'=>CustomPage::model()->toptabs()->findAll(),
				'htmlOptions'=>array('class'=>'horizontal unstyled clearfix')
			)); ?>
		</div>

      
      
      
        
        
        
        
  
    </div><!-- /.container -->
  </div><!-- /.navbar-inner -->
</div><!-- /.navbar -->

