<?php

namespace App\Http\Controllers;

use App\Models\ClientModel;
use App\Models\ExamModel;
use App\Models\InfoModel;
use App\Models\MedicalModel;
use App\Models\ObstetModel;
use App\Models\TransModel;
use App\Models\VawModel;
use Illuminate\Http\Request;

class AllController extends Controller
{
        public static function client(){
            $info = ClientModel::get();
            return view('pages.planning.client.client-index')->with(['info' => $info]);

        }
        public static function inform(){
            $info = InfoModel::get();
            return view('pages.planning.info.info-index')->with(['info' => $info]);

        }
        public static function med(){
            $info = MedicalModel::get();
            return view('pages.planning.medical.medical-index')->with(['info' => $info]);

        }
        public static function vaw(){
            $info = VawModel::get();
            return view('pages.planning.vaw.vaw-index')->with(['info' => $info]);

        }
        public static function exam(){
            $info = ExamModel::get();
            return view('pages.planning.exam.exam-index')->with(['info' => $info]);

        }
        public static function obstet(){
            $info = ObstetModel::get();
            return view('pages.planning.obstet.obstet-index')->with(['info' => $info]);

        }
        public static function trans(){
            $info = TransModel::get();
            return view('pages.planning.trans.trans-index')->with(['info' => $info]);

        }

        public static function client_store(Request $request){
            // Validate the request
            $request->validate([
            
                'inp_dov' => 'required|string|max:255',
                'inp_mf' => 'required|string|max:255',
                'inp_moa' => 'required|string|max:255',
                'inp_nosp' => 'required|string|max:255',
                'inp_dofuv' => 'required|string|max:255',
                'inp_q1' => 'required|string|max:255',
                'inp_q2' => 'required|string|max:255',
                'inp_q3' => 'required|string|max:255',
                'inp_q4' => 'required|string|max:255',
                'inp_q5' => 'required|string|max:255',
                'inp_q6' => 'required|string|max:255',
            ]);

            ClientModel::create([
                
                'c_date_of_visit' => $request->inp_dov,
                'c_medical_findings' => $request->inp_mf,
                'c_method_accepted' => $request->inp_moa,
                'c_name_of_service_provider' => $request->inp_nosp,
                'c_date_of_follow_up_visit' => $request->inp_dofuv,
                'c_quetsion_1' => $request->inp_q1,
                'c_question_2' => $request->inp_q2,
                'c_question_3' => $request->inp_q3,
                'c_question_4' => $request->inp_q4,
                'c_question_5' => $request->inp_q5,
                'c_question_6' => $request->inp_q6,
                
            ]);
        
            // Redirect back with success message
            return redirect()->back()->with( 'success', 'Information added successfully!');
        }
        public static function inform_store(Request $request)
        {
        // Validate the request
        $request->validate([
            'inp_client_id' => 'required|numeric|min:0',
            'inp_philhealth_no' => 'required|string|max:255',
            'inp_4ps' => 'required|string|max:255',
            'inp_nhts' => 'required|string|max:255',
            'inp_name_last' => 'required|string|max:255',
            'inp_name_given' => 'required|string|max:255',
            'inp_name_mi' => 'required|string|max:255',
            'inp_dob' => 'required|string|max:255',
            'inp_age' => 'required|string|max:255',
            'inp_educ_attain' => 'required|string|max:255',
            'inp_occupation' => 'required|string|max:255',
            'inp_address_no' => 'required|string|max:255',
            'inp_address_street' => 'required|string|max:255',
            'inp_address_barangay' => 'required|string|max:255',
            'inp_address_city' => 'required|string|max:255',
            'inp_address_province' => 'required|string|max:255',
            'inp_contact_number' => 'required|string|max:255',
            'inp_civil_status' => 'required|string|max:255',
            'inp_religion' => 'required|string|max:255',
            'inp_spouse_last' => 'required|string|max:255',
            'inp_spouse_given' => 'required|string|max:255',
            'inp_spouse_mi' => 'required|string|max:255',
            'inp_spouse_dob' => 'required|string|max:255',
            'inp_spouse_age' => 'required|string|max:255',
            'inp_spouse_occupation' => 'required|string|max:255',
            'inp_no_of_living_children' => 'required|string|max:255',
            'inp_plan_to_have_more_children' => 'required|string|max:255',
            'inp_average_monthly_income' => 'required|string|max:255',
            'inp_type_of_client' => 'required|string|max:255',
            'inp_reason_for_fp' => 'required|string|max:255',
            'inp_method_currently_used' => 'required|string|max:255',
        
        ]);

        // Create a new client record
        InfoModel::create([
            'info_client_id' => $request->inp_client_id,
            'info_philhealth_no' => $request->inp_philhealth_no,
            'info_4ps' => $request-> inp_4ps,
            'info_nhts' => $request-> inp_nhts,
            'info_name_last' => $request->inp_name_last,
            'info_name_given' => $request->inp_name_given,
            'info_name_mi' => $request->inp_name_mi,
            'info_dob' => $request->inp_dob,
            'info_age' => $request->inp_age,
            'info_educ_attain' => $request->inp_educ_attain,
            'info_occupation' => $request->inp_occupation,
            'info_address_no' => $request->inp_address_no,
            'info_address_street' => $request->inp_address_street,
            'info_address_barangay' => $request->inp_address_barangay,
            'info_address_city' => $request->inp_address_city,
            'info_address_province' => $request->inp_address_province,
            'info_contact_number' => $request->inp_contact_number,
            'info_civil_status' => $request->inp_civil_status,
            'info_religion' => $request->inp_religion,
            'info_spouse_last' => $request->inp_spouse_last,
            'info_spouse_given' => $request->inp_spouse_given,
            'info_spouse_mi' => $request->inp_spouse_mi,
            'info_spouse_dob' => $request->inp_spouse_dob,
            'info_spouse_age' => $request->inp_spouse_age,
            'info_spouse_occupation' => $request->inp_spouse_occupation,
            'info_no_of_living_children' => $request->inp_no_of_living_children,
            'info_plan_to_have_more_children' => $request->inp_plan_to_have_more_children,
            'info_average_monthly_income' => $request->inp_average_monthly_income,
            'info_reason_for_fp' => $request->inp_reason_for_fp,
            'info_type_of_client' => $request->inp_type_of_client,
            'info_method_currently_used' => $request->inp_method_currently_used,
        
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Client information added successfully!');
    }
    public static function med_store(Request $request)
    {
    // Validate the request
    $request->validate([
        'inp_severe_headaches_migraine' => 'required|string|max:255',
        'inp_history_of_stroke_heart_attack_hypertension' => 'required|string|max:255',
        'inp_non_traumatic_hematoma_frequent_bruising' => 'required|string|max:255',
        'inp_history_of_breast_cancer_mass' => 'required|string|max:255',
        'inp_severe_chest_pain' => 'required|string|max:255',
        'inp_cough_more_than_14_days' => 'required|string|max:255',
        'inp_jaundice' => 'required|string|max:255',
        'inp_unexplained_vaginal_bleeding' => 'required|string|max:255',
        'inp_abnormal_vaginal_discharge' => 'required|string|max:255',
        'inp_anti_seizure_or_rifampicin' => 'required|string|max:255',
        'inp_smoker' => 'required|string|max:255',
        'inp_disability' => 'required|string|max:255',
        'inp_disability_details' => 'required|string|max:255',
    ]);

    // Create a new client record
        MedicalModel::create([
        'med_severe_headaches_migraine' => $request->inp_severe_headaches_migraine,
        'med_history_of_stroke_heart_attack_hypertension' => $request->inp_history_of_stroke_heart_attack_hypertension,
        'med_non_traumatic_hematoma_frequent_bruising' => $request->inp_non_traumatic_hematoma_frequent_bruising,
        'med_history_of_breast_cancer_mass' => $request->inp_history_of_breast_cancer_mass,
        'med_severe_chest_pain' => $request->inp_severe_chest_pain,
        'med_cough_more_than_14_days' => $request->inp_cough_more_than_14_days,
        'med_jaundice' => $request->inp_jaundice,
        'med_unexplained_vaginal_bleeding' => $request->inp_unexplained_vaginal_bleeding,
        'med_abnormal_vaginal_discharge' => $request->inp_abnormal_vaginal_discharge,
        'med_anti_seizure_or_rifampicin' => $request->inp_anti_seizure_or_rifampicin,
        'med_smoker' => $request->inp_smoker,
        'med_disability' => $request->inp_disability,
        'med_disability_details' => $request->inp_disability_details,
    
    ]);

    // Redirect back with success message
    return redirect()->back()->with('success', 'Client information added successfully!');
    }
    public static function vaw_store(Request $request)
        {
        // Validate the request
        $request->validate([
            'inp_unpleasant_relationship' => 'required|string',
            'inp_partner_disapproves_fp_visit' => 'required|string',
            'inp_history_of_domestic_violence' => 'required|string',
            'inp_referred_to_dswd' => 'required|string',
            'inp_referred_to_wcps' => 'required|string',
            'inp_referred_to_ngos' => 'required|string',
            'inp_referred_to_others' => 'nullable|string',
        ]);

        VawModel::create([
            'vaw_unpleasant_relationship' => $request->inp_unpleasant_relationship,
            'vaw_partner_disapproves_fp_visit' => $request->inp_partner_disapproves_fp_visit,
            'vaw_history_of_domestic_violence' => $request->inp_history_of_domestic_violence,
            'vaw_referred_to_dswd' => $request->inp_referred_to_dswd,
            'vaw_referred_to_wcps' => $request->inp_referred_to_wcps,
            'vaw_referred_to_ngos' => $request->inp_referred_to_ngos,
            'vaw_referred_to_others' => $request->inp_referred_to_others,  // Nullable field
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Client information added successfully!');
    }
    public static function exam_store(Request $request)
    {
        // Validate the request
        $request->validate([
            'inp_weight' => 'required|string|min:0',
            'inp_height' => 'required|string|min:0',
            'inp_blood_pressure' => 'required|string|min:0',
            'inp_pulse_rate' => 'required|string|min:0',
            'inp_skin' => 'required|string|in:normal,pale,yellowish,hematoma',
            'inp_conjunctiva' => 'required|string|in:normal,pale,yellowish',
            'inp_neck' => 'required|string|in:normal,neck mass,enlarged lymph nodes',
            'inp_breast' => 'required|string|in:normal,mass,nipple discharge',
            'inp_abdomen' => 'required|string|in:normal,abdominal mass,varicosities',
            'inp_extremities' => 'required|string|in:normal,edema,varicosities',
            'inp_pelvic_mass' => 'required|string|in:Yes,No',
            'inp_pelvic_abnormal_discharge' => 'required|string|in:Yes,No',
            'inp_pelvic_cervical_abnormalities' => 'required|string|in:Yes,No',
            'inp_pelvic_warts' => 'required|string|in:Yes,No',
            'inp_pelvic_polyp_or_cyst' => 'required|string|in:Yes,No',
            'inp_pelvic_inflammation_or_erosion' => 'required|string|in:Yes,No',
            'inp_pelvic_bloody_discharge' => 'required|string|in:Yes,No',
            'inp_pelvic_cervical_consistency' => 'required|string|in:firm,soft',
            'inp_pelvic_cervical_tenderness' => 'required|string|in:Yes,No',
            'inp_pelvic_adnexal_mass_tenderness' => 'required|string|in:Yes,No',
            'inp_uterine_position' => 'required|string|in:mid,anteflexed,retroflexed',
            'inp_uterine_depth' => 'required|numeric',
        ]);

        // Create a new examination record
        ExamModel::create([
            'exm_weight' => $request->inp_weight,
            'exm_height' => $request->inp_height,
            'exm_blood_pressure' => $request->inp_blood_pressure,
            'exm_pulse_rate' => $request->inp_pulse_rate,
            'exm_skin' => $request->inp_skin,
            'exm_conjunctiva' => $request->inp_conjunctiva,
            'exm_neck' => $request->inp_neck,
            'exm_breast' => $request->inp_breast,
            'exm_abdomen' => $request->inp_abdomen,
            'exm_extremities' => $request->inp_extremities,
            'exm_pelvic_mass' => $request->inp_pelvic_mass,
            'exm_pelvic_abnormal_discharge' => $request->inp_pelvic_abnormal_discharge,
            'exm_pelvic_cervical_abnormalities' => $request->inp_pelvic_cervical_abnormalities,
            'exm_pelvic_warts' => $request->inp_pelvic_warts,
            'exm_pelvic_polyp_or_cyst' => $request->inp_pelvic_polyp_or_cyst,
            'exm_pelvic_inflammation_or_erosion' => $request->inp_pelvic_inflammation_or_erosion,
            'exm_pelvic_bloody_discharge' => $request->inp_pelvic_bloody_discharge,
            'exm_pelvic_cervical_consistency' => $request->inp_pelvic_cervical_consistency,
            'exm_pelvic_cervical_tenderness' => $request->inp_pelvic_cervical_tenderness,
            'exm_pelvic_adnexal_mass_tenderness' => $request->inp_pelvic_adnexal_mass_tenderness,
            'exm_uterine_position' => $request->inp_uterine_position,
            'exm_uterine_depth' => $request->inp_uterine_depth,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Examination information added successfully!');
    }
    public static function obstet_store(Request $request)
    {
        // Validate the request
        $request->validate([
            'inp_gravidity' => 'required|string',
            'inp_parity' => 'required|string',
            'inp_num_full_term' => 'nullable|string',
            'inp_num_premature' => 'nullable|string',
            'inp_num_abortion' => 'nullable|string',
            'inp_num_living_children' => 'nullable|string',
            'inp_last_delivery_date' => 'nullable|string',
            'inp_last_delivery_type' => 'nullable|string',
            'inp_last_menstrual_period' => 'nullable|string',
            'inp_menstrual_flow' => 'required|string|in:scanty,moderate,heavy',
            'inp_dysmenorrhea' => 'required|string|in:Yes,No',
            'inp_hydatidiform_mole' => 'required|string|in:Yes,No',
            'inp_ectopic_pregnancy' => 'required|string|in:Yes,No',
        ]);

        // Create a new examination record
        ObstetModel::create([
            'obs_gravidity' => $request->inp_gravidity,
            'obs_parity' => $request->inp_parity,
            'obs_num_full_term' => $request->inp_num_full_term,
            'obs_num_premature' => $request->inp_num_premature,
            'obs_num_abortion' => $request->inp_num_abortion,
            'obs_num_living_children' => $request->inp_num_living_children,
            'obs_last_delivery_date' => $request->inp_last_delivery_date,
            'obs_last_delivery_type' => $request->inp_last_delivery_type,
            'obs_last_menstrual_period' => $request->inp_last_menstrual_period,
            'obs_menstrual_flow' => $request->inp_menstrual_flow,
            'obs_dysmenorrhea' => $request->inp_dysmenorrhea,
            'obs_hydatidiform_mole' => $request->inp_hydatidiform_mole,
            'obs_ectopic_pregnancy' => $request->inp_ectopic_pregnancy,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Examination information added successfully!');
    }
    public static function trans_store(Request $request)
    {
        // Validate the request
        $request->validate([
            'inp_abnormal_discharge' => 'required|string',
            'inp_discharge_from' => 'required|string',
            'inp_sores_or_ulcers' => 'required|string',
            'inp_genital_pain' => 'required|string',
            'inp_treatment_for_stis' => 'required|string',
            'inp_hiv_aids_pelvic_disease' => 'required|string',
        ]);

        // Create a new examination record
        TransModel::create([
            'trans_abnormal_discharge' => $request->inp_abnormal_discharge,
            'trans_discharge_from' => $request->inp_discharge_from,
            'trans_sores_or_ulcers' => $request->inp_sores_or_ulcers,
            'trans_genital_pain' => $request->inp_genital_pain,
            'trans_treatment_for_stis' => $request->inp_treatment_for_stis,
            'trans_hiv_aids_pelvic_disease' => $request->inp_hiv_aids_pelvic_disease,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Trans health information added successfully!');
    }
}






