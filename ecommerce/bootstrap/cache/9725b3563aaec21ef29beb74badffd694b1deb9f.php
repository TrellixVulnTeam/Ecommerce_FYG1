 
<?php $__env->startSection('title','Create Product'); ?>
<?php $__env->startSection('data-page-id','adminProducts'); ?> 

<!-- at first use isset - test if variable exists in page -->
<?php $__env->startSection('content'); ?>
	<div class="add-product">
		<div class="row expanded">
		   <div class="column medium-11">
				<h2>Add Inventory Item</h2>
			</div>
		</div>

		<?php echo $__env->make('includes.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<form method="post" action="/admin/products/create" enctype="multipart/form-data">
			<div class ="small-12 medium-11">
				<div class="row expanded">
					<div class="small-12 medium-6 column">
					  	<label>Product Name:
					  		<input type="text" name="name" placeholder="Product Name" 
					  		value="<?php echo e(\app\classes\Request::old('post','name')); ?>">
					  	</label>
					</div>
			
									
			
					<div class="small-12 medium-6 column">
					  	<label>Product Price:
					  		<input type="text" name="price" placeholder="Product Price" 
					  		value="<?php echo e(\app\classes\Request::old('post','price')); ?>">
					  	</label>
					</div>
				</div>
			</div>	
			
			
			<div class ="small-12 medium-11">
				<div class="row expanded">
					<div class="small-12 medium-6 column">
					  	<label>Product Category:
					  		<select name ="category" id="product-category">
					  			<option value="<?php echo e(\app\classes\Request::old('post','category')?:""); ?>">
					  			 	<?php echo e(\app\classes\Request::old('post','category')?:"Select Category"); ?>

					  			</option>
					  			 <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					  			 	<option value="<?php echo e($category->id); ?>"> <?php echo e($category->name); ?></option>
					  			 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					  		</select>
					  	</label>
					</div>
					
					
					<div class="small-12 medium-6 column">
					  	<label>Product Quantity:
					  		<select name = "quantity">
					  			<option value="<?php echo e(\app\classes\Request::old('post','quantity')?:""); ?>">
					  			 	<?php echo e(\app\classes\Request::old('post','quantity')?:"Select Quantity"); ?>

					  			</option>
					  			<?php for($i=1; $i <= 50; $i++): ?>
					  				<option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
					  			<?php endfor; ?>	
					  		</select>
					  	</label>
					</div>
			
					<div class="small-12 medium-6 column">
					  	<label>Product SubCategory:
					  		<select name = "subcategory" id="product-subcategory">
					  			<option value="<?php echo e(\app\classes\Request::old('post','subcategory')?:""); ?>">
					  			 	<?php echo e(\app\classes\Request::old('post','subcategory')?:"Select subcategory"); ?>

					  			</option>
					  		</select>
					  	</label>
					</div>
				
			
			<div class="small-12 medium-6 column">
			</br>
			<div class="input-group">
                       <span class="input-group-label">Product Image:</span>
                       <input type="file" name="productImage" class="input-group-field">
                 </div>
              </div>	
            <div class="small-12 column">
            <label>Description:
            <textarea name="description" placeholder="Description"><?php echo e(\app\classes\Request::old('post','description')); ?></textarea> 
            </label>
            <input type="hidden" name="token" value="<?php echo e(\app\classes\CSRFToken::_token()); ?>">
            <button class="button alert"  type="reset">Reset</button>
            <input class="button success float-right" type="submit" value="Save Product">
            </div>
          </div>   
		</form>
	</div>

	<?php echo $__env->make('includes.delete-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\developer2\eshop\gitrepo\ecommerce\resources\views/admin/products/create.blade.php ENDPATH**/ ?>