<div class="container px-5 my-5">
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <section>
                <h2 class="text-gradient fw-bolder mb-4">Education</h2>
                <!-- Education Card-->
                <div id="education-list">
                    
                </div>
            </section>
        </div>
    </div>
</div>

<script>
    getEduList()
    async function getEduList() {
        try {
            
            let URL = "/educationData";
            let response = await axios.get(URL);

            response.data.forEach(item => {
                document.getElementById('education-list').innerHTML+=(`<div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-primary fw-bolder mb-2">${item['duration']}</div>
                                    <div class="mb-2">
                                        <div class="small fw-bolder">${item['institutionName']}</div>
                                    </div>
                                    <div class="fst-italic">
                                        <div class="small text-muted">${item['field']}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8"><div>${item['details']}</div></div>
                        </div>
                    </div>
                </div>`)
            });

        } catch (error) {
            alert(error);
        }
    }
</script>