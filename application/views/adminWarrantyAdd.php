<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">صدورکارت گارانتی جدید</h3>
				</div>

				<a href="<?php echo base_url() . "index.php/UserController/warrantyManagement" ?>"
				   class="btn btn-success"
                   style="margin-left:50px;float: left">انصراف</a>

				<!-- /.box-header -->
				<div class="box-body">
                <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelectProducts">
                        <option selected>انتخاب کنید</option>
                        <?php
                        foreach($products as $product)
                        {
                            echo '<option value="'.$product['id'].'">'.$product['title'].'</option>';
                        }
                        ?>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    
                    </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="customerType" id="customer_User" value="User">
                    <label class="form-check-label" for="inlineCheckbox1">مشتری عضو سامانه است</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="customerType" id="customer_Free" value="Free">
                    <label class="form-check-label" for="inlineCheckbox2">مشتری عضو سامانه نیست</label>
                    </div>
                    <div class="ourForm">
                        
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <label for="inputFname">نام</label>
                            <input type="text" class="form-control" id="inputFname" placeholder="نام">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputLname">نام خانوادگی</label>
                            <input type="text" class="form-control" id="inputLname" placeholder="نام خانوادگی">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputPhone">شماره تماس</label>
                            <input type="tel" class="form-control" id="inputPhone" placeholder="شماره تماس">
                            </div>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputAddress">آدرس</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="استان،شهر،خیابان،کوچه،پلاک">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPostalCode">کدپستی</label>
                            <input type="text" class="form-control" id="inputPostalCode" placeholder="کد پستی">
                        </div>
                        
                        <div class="form-group">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>

                    </div>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->


			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>
$(function()
{
    $(".ourForm").hide();
});
$(document).ready(function()
{
    $("#customer_Free").click(function()
    {
        $(".ourForm").show("slow");
    });
    $("#customer_User").click(function()
    {
        $(".ourForm").hide("slow");
    });
});
</script>
