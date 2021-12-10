<!-- Basic Modal -->
<?php foreach ($group as $id_rules) : ?>
    <div class="modal fade" id="usergroupModal<?= $id_rules->id_role; ?>" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Role User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('group/update/' . $id_rules->id_role); ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Pilih User</label>

                            <select name="users_simpan" id="" class="form-control">
                                <option value="<?= $id_rules->user_id; ?>"><?= $id_rules->username; ?></option>
                                <?php foreach ($user as $value) : ?>
                                    <option value="<?= $value->id; ?>"><?= $value->username; ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="">Pilih Role</label>
                            <select name="role_simpan" id="" class="form-control">
                                <option value="<?= $id_rules->group_id; ?>"><?= $id_rules->name; ?></option>
                                <?php foreach ($name_group as $value) : ?>
                                    <option value="<?= $value->id; ?>"><?= $value->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- End Basic Modal-->
<?php endforeach; ?>