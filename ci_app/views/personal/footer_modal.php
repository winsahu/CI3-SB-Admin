<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="modal fade" id="modal_form" role="dialog" tabindex="-1" aria-labelledby="modal_formTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Tambah Data</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body form">
				<form action="#" id="pform" class="form-horizontal">
                    <input type="hidden" value="" name="id">
                    <div class="form-body">
                        <div class="form-group row">
                            <label class="control-label col-sm-4">Nama Depan</label>
                            <div class="col-sm-8">
                                <input name="firstName" id="firstName" placeholder="First Name" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-4">Nama Belakang</label>
                            <div class="col-sm-8">
                                <input name="lastName" placeholder="Last Name" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-4">Kelamin</label>
                            <div class="col-sm-8">
                                <select name="gender" class="form-control">
                                    <option value="">--Select Gender--</option>
                                    <option value="pria">Pria</option>
                                    <option value="wanita">Wanita</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-4">Alamat</label>
                            <div class="col-sm-8">
                                <textarea name="address" placeholder="Address" class="form-control"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-4">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input name="dob" placeholder="yyyy-mm-dd" class="form-control datepicker" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group row" id="photo-preview">
                            <label class="control-label col-sm-4">Photo</label>
                            <div class="col-sm-8" id="fotoku">
                                (Tak ada foto)
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-4" id="label-photo">Unggah Photo </label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control-file" name="photo">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" id="btnSubmit" data-aksi="submit" data-id="1" class="btn btn-primary">Kirim</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>
