<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-medical-alt"></i> Patient History
            <small>View and add medical history for this patient</small>
        </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Medical History for Patient: <?php echo $PatientName; ?></h3>
                    </div><!-- /.box-header -->

                    <!-- Form to add new medical history -->
                    <div class="box-body">
                        <form action="<?php echo base_url(); ?>addPatientHistory/<?php echo $patientId; ?>"
                            method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="date_of_visit">Date of Visit</label>
                                        <input type="date" class="form-control" name="date_of_visit" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="temperature">Temperature (°F)</label>
                                        <input type="number" step="0.1" class="form-control" name="temperature"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="height">Height (cm)</label>
                                        <input type="number" class="form-control" name="height" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="weight">Weight (kg)</label>
                                        <input type="number" class="form-control" name="weight" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="blood_pressure">Blood Pressure</label>
                                        <input type="text" class="form-control" name="blood_pressure"
                                            placeholder="e.g. 120/80" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="blood_sugar">Blood Sugar (mg/dL)</label>
                                        <input type="number" class="form-control" name="blood_sugar" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Custom fields for additional medical history -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="allergies">Others</label>
                                        <textarea class="form-control" name="allergies" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="medications">Current Medications</label>
                                        <textarea class="form-control" name="medications" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="diagnosis">Diagnosis</label>
                                        <textarea class="form-control" name="diagnosis" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Upload PDF -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="notes">Notes</label>
                                        <textarea class="form-control" name="notes" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="prescription_pdf">Upload Prescription (PDF)</label>
                                        <input type="file" class="form-control" name="prescription_pdf"
                                            accept="application/pdf">
                                    </div>
                                </div>
                            </div>


                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Add History</button>
                            </div>
                        </form>
                    </div><!-- /.box-body -->

                    <!-- Display existing medical history -->
                    <div class="box-body table-responsive no-padding">
                        <?php if (!empty($history)) { ?>
                        <table class="table table-hover">
                            <tr>
                                <th style="width: 8%;">Date of Visit</th>
                                <th style="width: 8%;">Temperature (°F)</th>
                                <th style="width: 8%;">Height (cm)</th>
                                <th style="width: 8%;">Weight (kg)</th>
                                <th style="width: 10%;">Blood Pressure</th>
                                <th style="width: 8%;">Blood Sugar (mg/dL)</th>
                                <th style="width: 10%;">Others</th>
                                <th style="width: 10%;">Medications</th>
                                <th style="width: 10%;">Diagnosis</th>
                                <th style="width: 10%;">Notes</th>
                                <th style="width: 10%;">Prescription</th>
                            </tr>
                            <?php foreach ($history as $record) { ?>
                            <tr>
                                <td><?php echo date("d-m-Y", strtotime($record->date_of_visit)); ?></td>
                                <td><?php echo $record->temperature; ?></td>
                                <td><?php echo $record->height; ?></td>
                                <td><?php echo $record->weight; ?></td>
                                <td><?php echo $record->blood_pressure; ?></td>
                                <td><?php echo $record->blood_sugar; ?></td>
                                <td><?php echo $record->allergies; ?></td>
                                <td><?php echo $record->medications; ?></td>
                                <td><?php echo $record->diagnosis; ?></td>
                                <td><?php echo $record->notes; ?></td>
                                <td>
                                    <?php if ($record->prescription_pdf) { ?>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                        data-target="#prescriptionModal_<?php echo $record->id; ?>">
                                        View Prescription
                                    </button>

                                    <!-- Modal for PDF -->
                                    <div class="modal fade" id="prescriptionModal_<?php echo $record->id; ?>"
                                        tabindex="-1" role="dialog"
                                        aria-labelledby="prescriptionModalLabel_<?php echo $record->id; ?>"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="prescriptionModalLabel_<?php echo $record->id; ?>">
                                                        Prescription</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <embed src="<?php echo base_url($record->prescription_pdf); ?>"
                                                        type="application/pdf" width="100%" height="600px" />
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } else { ?>
                                    No Prescription
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                        <?php } else { ?>
                        <p>No medical history available for this patient.</p>
                        <?php } ?>
                    </div><!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
</div>