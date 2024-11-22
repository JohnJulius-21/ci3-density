<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Check-In</h4>
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

                    <form method="post" action="<?php echo site_url('guestcheckin/store'); ?>">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                            value="<?php echo $this->security->get_csrf_hash(); ?>">

                        <div class="mb-3">
                            <label for="guest_id">Guest</label>
                            <select class="form-control" name="guest_id" required>
                                <option value="">Select Guest</option>
                                <?php foreach ($guests as $guest): ?>
                                    <option value="<?php echo $guest->guest_id; ?>"><?php echo $guest->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="room_id">Room</label>
                            <select name="room_id[]" id="room_id" class="form-control" multiple="multiple" required>
                                <?php foreach ($rooms as $room): ?>
                                    <option value="<?php echo $room->room_id; ?>" data-price="<?php echo $room->price; ?>">
                                        <?php echo $room->room_number; ?> - <?php echo $room->room_type; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>

                        </div>

                        <!-- <div class="mb-3">
                            <label for="room_id">Room</label>
                            <select class="form-control" name="room_id" id="room_id" required>
                                <option value="">Select Room</option>
                                <?php foreach ($rooms as $room): ?>
                                    <option value="<?php echo $room->room_id; ?>" data-price="<?php echo $room->price; ?>">
                                        <?php echo $room->room_number; ?> - <?php echo $room->room_type; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div> -->

                        <div class="mb-3">
                            <label for="checkin_date">Check-In Date</label>
                            <input type="datetime-local" class="form-control" name="checkin_date" id="checkin_date"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="checkout_date">Check-Out Date</label>
                            <input type="datetime-local" class="form-control" name="checkout_date" id="checkout_date"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="duration">Duration (days)</label>
                            <input type="number" class="form-control" name="duration" id="duration" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="price_per_night">Price per Night</label>
                            <input type="text" class="form-control" name="price_per_night" id="price_per_night"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <label for="total_price">Total Price</label>
                            <input type="text" class="form-control" name="total_price" id="total_price" readonly>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?php echo site_url('guestcheckin'); ?>" class="btn btn-secondary">Cancel</a>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>