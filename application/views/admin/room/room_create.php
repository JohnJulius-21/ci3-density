<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Room</h4>
            </div>
            <div class="card-body">
                <div class="p-4">
                    <!-- Tampilkan pesan error atau success -->
                    <?php if (!empty($error)) {
                        echo $error;
                    } ?>
                    <?php if (!empty($success)) {
                        echo $success;
                    } ?>

                    <form method="post" action="<?php echo site_url('room/store'); ?>">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                            value="<?php echo $this->security->get_csrf_hash(); ?>">

                        <div class="mb-3">
                            <label for="room_number">Room Number</label>
                            <input type="text" class="form-control" name="room_number"
                                value="<?php echo set_value('room_number'); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="room_type">Room Type</label>
                            <select class="form-control" name="room_type">
                                <option value="">Choose</option>
                                <option value="Suite Room" <?php echo set_select('room_type', 'Suite Room'); ?>>Suite
                                    Room</option>
                                <option value="Deluxe Room" <?php echo set_select('room_type', 'Deluxe Room'); ?>>Deluxe
                                    Room</option>
                                <option value="Superior Room" <?php echo set_select('room_type', 'Superior Room'); ?>>
                                    Superior Room</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" name="price"
                                value="<?php echo set_value('price'); ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?php echo site_url('room/index'); ?>" class="btn btn-secondary">Cancel</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>