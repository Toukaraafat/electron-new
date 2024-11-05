<div id="estlaam-modal-md" class="modal fade" tabindex="-1" aria-labelledby="estlaam-modal-md"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myModalLabel">
                        استعلام قضائي </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('installmentIssue.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="installment_clients_id" id="installment_clients_id" value="">
                    <div class="modal-body">
                        <h5>معاملة جديدة <span class="text-info"> </span></h5>
                        <div id="formRows">
                            <div class="row issue-row mb-3" data-index="0">
                                <div class="col">
                                    <p>رقم القضية</ح>
                                        <input type="text" name="installment_issue[0][number_issue]"
                                            class="form-control" required />
                                </div>
                                <div class="col">
                                    <p> الحالة</p>
                                    <div class="form-check">
                                        <label class="" for="flexRadioDefault1">
                                            مفتوح
                                        </label>
                                        <input class="" type="radio" name="installment_issue[0][status]"
                                            id="flexRadioDefault1">

                                    </div>
                                    <div class="form-check">
                                        <label class="" for="flexRadioDefault2">
                                            مغلق
                                        </label>
                                        <input class="" type="radio" name="installment_issue[0][status]"
                                            id="flexRadioDefault2" value="close" checked>

                                    </div>
                                </div>
                                <div class="col">
                                    <p>الجهه</p>
                                    <input type="text" name="installment_issue[0][working_company]"
                                        class="form-control" required />
                                </div>
                                <div class="col">
                                    <p>مبلغ المفتوح</p>
                                    <input type="text" name="installment_issue[0][opening_amount]"
                                        class="form-control" required />
                                </div>
                                <div class="col">
                                    <p>مبلغ المغلق</p>
                                    <input type="text" name="installment_issue[0][closing_amount]"
                                        class="form-control" required />
                                </div>
                                <div class="col">
                                    <p>صورة القضية</p>
                                    <input type="file" name="installment_issue[0][image]" required>

                                </div>
                                <div class="col">
                                    <p>التاريخ</p>
                                    <input type="date" name="installment_issue[0][date]" class="form-control"
                                        required />
                                </div>
                                <div class="col">
                                    <p>ازالة</p>
                                    <button type="button" class="btn btn-danger remove-row-btn">Remove</button>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 text-left">
                            <button type="button" class="btn btn-secondary" id="addRowBtn1">اضافة قضية
                                جديدة</button>
                        </div>
                        <div class="row" id ="total" style="display: none;">
                            <div class="mb-3 col">
                                <p>مجموع المفنوح</p>
                                <input type="text" name="opening_total" id="opening_total" class="form-control"
                                    readonly />

                            </div>
                            <div class="mb-3 col">
                                <p>مجموع المغلق</p>
                                <input type="text" name="closing_total" id="closing_total" class="form-control"
                                    readonly />
                            </div>
                            <div class="mb-3 col">
                                <p>مجموع الكلى</p>
                                <input type="text" id="totalll" name="total_IC" class="form-control"
                                    readonly />
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer d-flex ">
                        <button type="submit" class="btn btn-primary">حفظ</button>
                        <button type="button" class="btn bg-danger-subtle text-danger  waves-effect"
                            data-bs-dismiss="modal">
                            الغاء
                        </button>
                    </div>
                </form>
            </div>
            <!-- open file model  -->
            <div id="open-file" class="modal fade" tabindex="-1" aria-labelledby="bs-example-modal-md"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                            <h4 class="modal-title" id="myModalLabel">
                                إثبات حالة</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label" for="input1 "> تاريخ </label>
                                        <input type="date" class="form-control mb-2" id="input1">
                                    </div>
                                    <div class="form-group">
                                        <label for="formFile" class="form-label">اختر صورة </label>
                                        <input class="form-control" type="file" id="formFile" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer d-flex ">
                            <button type="submit" class="btn btn-primary">حفظ وتحويل لأعلان التنفيذ</button>
                            <button type="button" class="btn bg-danger-subtle text-danger  waves-effect"
                                data-bs-dismiss="modal">
                                الغاء
                            </button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>