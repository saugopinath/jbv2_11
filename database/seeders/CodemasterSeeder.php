<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Codemaster;
class CodemasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $codemasterParents = array(
            array(
                "name" => "CASTE",
                "short_name" => "caste",
                "code" => "17",
            ),
            array(
                "name" => "NEXT LEVEL ROLE ID",
                "short_name" => "next_level_role_id",
                "code" => "2",
            ),
            array(
                "name" => "Marital Status",
                "short_name" => "marital_status",
                "code" => "3",
            ),
            array(
                "name" => "Entry Type",
                "short_name" => "entry_type",
                 "code" => "4",
            ),
            array(
                "name" => "Gender",
                "short_name" => "gender",
                 "code" => "5",
            ),
            array(
                "name" => "Disablity Type",
                "short_name" => "disablity_type",
                 "code" => "6",
            ),
            array(
                "name" => "Ration Card Category",
                "short_name" => "ration_cat",
                 "code" => "7",
            ),
            array(
                "name" => "Pension Body",
                "short_name" => "pension_body",
                "code" => "8",
            ),
            array(
                "name" => "Social Pension Category",
                "short_name" => "social_pension_cat",
                 "code" => "9",
            ),
            array(
                "name" => "not_eligible_cause",
                "short_name" => "not_eligible_cause",
                 "code" => "10",
            ),
            array(
                "name" => "Religion",
                "short_name" => "religion",
                 "code" => "11",
            ),
            array(
                "name" => "Rejection Revert Cause",
                "short_name" => "rejection_cause",
                 "code" => "12",
            ),
            array(
                "name" => "Relationship",
                "short_name" => "relationship",
                 "code" => "13",
            ),
            array(
                "name" => "Incomplete Details",
                "short_name" => "incomplete_details",
                 "code" => "14",
            ),
            array(
                "name" => "OFFICE TYPE",
                "short_name" => "office_type",
                 "code" => "15",
            ),
            array(
                "name" => "ENCLOSER DETAILS",
                "short_name" => "ENCDETAILS",
                "code" => "16",
            ),
        );
        foreach ($codemasterParents as $codemasterParent_item) {
            Codemaster::create([
                'name'     => strtoupper($codemasterParent_item['name']),
                'code'     => $codemasterParent_item['code'],
                'short_name'     => $codemasterParent_item['short_name'],
            ]);
        }
        $codemasterChilds = array(
            array(
                "name" => "SC",
                "short_name" => "sc",
                "parent_short_code" => "caste",
                "code" => "171",
            ),
            array(
                "name" => "ST",
                "short_name" => "st",
                "parent_short_code" => "caste",
                 "code" => "172",
            ),
            array(
                "name" => "General",
                "short_name" => "general",
                "parent_short_code" => "caste",
                 "code" => "173",
            ),
            array(
                "name" => "NEXT LEVEL ROLE ID OPERATOR",
                "short_name" => "next_level_role_id_operator",
                "parent_short_code" => "next_level_role_id",
                 "code" => "21",
            ),
            array(
                "name" => "NEXT LEVEL ROLE ID VERIFIER",
                "short_name" => "next_level_role_id_verifier",
                "parent_short_code" => "next_level_role_id",
                 "code" => "22",
            ),
            array(
                "name" => "NEXT LEVEL ROLE ID APPROVER",
                "short_name" => "next_level_role_id_approver",
                "parent_short_code" => "next_level_role_id",
                 "code" => "23",
            ),
            array(
                "name" => "NEXT LEVEL ROLE ID RECOMANDER",
                "short_name" => "next_level_role_id_recomander",
                "parent_short_code" => "next_level_role_id",
                 "code" => "24",
            ),
            array(
                "name" => "Marital Status Unmarried",
                "short_name" => "marital_status_unmarried",
                "parent_short_code" => "marital_status",
                 "code" => "31",
            ),
            array(
                "name" => "Marital Status Married",
                "short_name" => "marital_status_married",
                "parent_short_code" => "marital_status",
                 "code" => "32",
            ),
            array(
                "name" => "Marital Status Seperated",
                "short_name" => "marital_status_seperated",
                "parent_short_code" => "marital_status",
                 "code" => "33",
            ),
            array(
                "name" => "Marital Status Widow",
                "short_name" => "marital_status_widow",
                "parent_short_code" => "marital_status",
                 "code" => "34",
            ),
            array(
                "name" => "Marital Status Widower",
                "short_name" => "marital_status_widower",
                "parent_short_code" => "marital_status",
                 "code" => "35",
            ),
            array(
                "name" => "Entry Type Normal",
                "short_name" => "entry_type_normal",
                "parent_short_code" => "entry_type",
                 "code" => "41",
            ),
            array(
                "name" => "Entry Type Duare Sarkar",
                "short_name" => "entry_type_duare_sarkar",
                "parent_short_code" => "entry_type",
                 "code" => "42",
            ),
            array(
                "name" => "Male",
                "short_name" => "male",
                "parent_short_code" => "gender",
                 "code" => "51",
            ),
            array(
                "name" => "Female",
                "short_name" => "female",
                "parent_short_code" => "gender",
                 "code" => "52",
            ),
            array(
                "name" => "Other",
                "short_name" => "other",
                "parent_short_code" => "gender",
                 "code" => "53",
            ),
            array(
                "name" => "Orthopedically Handicapped",
                "short_name" => "OH",
                "parent_short_code" => "disablity_type",
                 "code" => "61",
            ),
            array(
                "name" => "Visually Handicapped",
                "short_name" => "VH",
                "parent_short_code" => "disablity_type",
                 "code" => "62",
            ),
            array(
                "name" => "Mental illness",
                "short_name" => "MI",
                "parent_short_code" => "disablity_type",
                 "code" => "63",
            ),
            array(
                "name" => "Mental Retardation",
                "short_name" => "MR",
                "parent_short_code" => "disablity_type",
                 "code" => "64",
            ),
            array(
                "name" => "Mutiple Disablities",
                "short_name" => "MD",
                "parent_short_code" => "disablity_type",
                 "code" => "65",
            ),
            array(
                "name" => "Leprosy Cured",
                "short_name" => "LC",
                "parent_short_code" => "disablity_type",
                 "code" => "66",
            ),
            array(
                "name" => "Nervous Disorder",
                "short_name" => "ND",
                "parent_short_code" => "disablity_type",
                 "code" => "67",
            ),
            array(
                "name" => "Others",
                "short_name" => "others",
                "parent_short_code" => "disablity_type",
                 "code" => "68",
            ),
            array(
                "name" => "AAY",
                "short_name" => "AAY",
                "parent_short_code" => "ration_cat",
                 "code" => "71",
            ),
            array(
                "name" => "OHH",
                "short_name" => "OHH",
                "parent_short_code" => "ration_cat",
                 "code" => "72",
            ),
            array(
                "name" => "RKSY 1",
                "short_name" => "RKSY 1",
                "parent_short_code" => "ration_cat",
                 "code" => "73",
            ),
            array(
                "name" => "RKSY 2",
                "short_name" => "RKSY 2",
                "parent_short_code" => "ration_cat",
                 "code" => "74",
            ),
            array(
                "name" => "SPHH",
                "short_name" => "SPHH",
                "parent_short_code" => "ration_cat",
                 "code" => "75",
            ),
            array(
                "name" => "PHH",
                "short_name" => "PHH",
                "parent_short_code" => "ration_cat",
                 "code" => "76",
            ),
            array(
                "name" => "Central Govt",
                "short_name" => "Central Govt",
                "parent_short_code" => "pension_body",
                 "code" => "81",
            ),
            array(
                "name" => "State Govt",
                "short_name" => "State Govt",
                "parent_short_code" => "pension_body",
                 "code" => "82",
            ),
            array(
                "name" => "Local Administration",
                "short_name" => "Local Administration",
                "parent_short_code" => "pension_body",
                 "code" => "83",
            ),
            array(
                "name" => "Govt. Aided Organization",
                "short_name" => "Govt. Aided Organization",
                "parent_short_code" => "pension_body",
                 "code" => "84",
            ),
            array(
                "name" => "NSAP Old Age",
                "short_name" => "NSAP Old Age",
                "parent_short_code" => "social_pension_cat",
                 "code" => "91",
            ),
            array(
                "name" => "NSAP Widow Pension",
                "short_name" => "NSAP Widow Pension",
                "parent_short_code" => "social_pension_cat",
                 "code" => "92",
            ),
            array(
                "name" => "NSAP Disability Pension",
                "short_name" => "NSAP Disability Pension",
                "parent_short_code" => "social_pension_cat",
                 "code" => "93",
            ),
            array(
                "name" => "Old Age Pension",
                "short_name" => "Old Age Pension",
                "parent_short_code" => "social_pension_cat",
                 "code" => "94",
            ),
            array(
                "name" => "Widow Pension",
                "short_name" => "Widow Pension",
                "parent_short_code" => "social_pension_cat",
                 "code" => "95",
            ),
            array(
                "name" => "Disability Pension",
                "short_name" => "Disability Pension",
                "parent_short_code" => "social_pension_cat",
                 "code" => "96",
            ),
            array(
                "name" => "Lok Prasar Prakalpa",
                "short_name" => "Lok Prasar Prakalpa",
                "parent_short_code" => "social_pension_cat",
                 "code" => "97",
            ),
            array(
                "name" => "Fishermans Old Age Pension",
                "short_name" => "Fisherman Old Age Pension",
                "parent_short_code" => "social_pension_cat",
                 "code" => "98",
            ),
            array(
                "name" => "Farmers Old Age Pension",
                "short_name" => "Farmers Old Age Pension",
                "parent_short_code" => "social_pension_cat",
                 "code" => "99",
            ),
            array(
                "name" => "Artisan/Weaver Old Age Pension",
                "short_name" => "Artisan/Weaver Old Age Pension",
                "parent_short_code" => "social_pension_cat",
                 "code" => "910",
            ),
         array(
                "name" => "Hinduism",
                "short_name" => "Hinduism",
                "parent_short_code" => "religion",
                 "code" => "111",
            ),
            array(
                "name" => "Islam",
                "short_name" => "Islam",
                "parent_short_code" => "religion",
                 "code" => "112",
            ),
            array(
                "name" => "Christianity",
                "short_name" => "Christianity",
                "parent_short_code" => "religion",
                 "code" => "113",
            ),
            array(
                "name" => "Sikhism",
                "short_name" => "Sikhism",
                "parent_short_code" => "religion",
                 "code" => "114",
            ),
            array(
                "name" => "Buddhism",
                "short_name" => "Buddhism",
                "parent_short_code" => "religion",
                 "code" => "115",
            ),
            array(
                "name" => "Jainism",
                "short_name" => "Jainism",
                "parent_short_code" => "religion",
                 "code" => "116",
            ),
            array(
                "name" => "Unaffiliated",
                "short_name" => "Unaffiliated",
                "parent_short_code" => "religion",
                 "code" => "117",
            ),
            array(
                "name" => "Others",
                "short_name" => "Others",
                "parent_short_code" => "religion",
                 "code" => "118",
            ),
            array(
                "name" => "Duplicate Bank Account Number",
                "short_name" => "DUP BANK",
                "parent_short_code" => "rejection_cause",
                 "code" => "121",
            ),
            array(
                "name" => "Duplicate Aadhaar Number",
                "short_name" => "DUP AADHAAR",
                "parent_short_code" => "rejection_cause",
                 "code" => "122",
            ),
            array(
                "name" => "Bank Passbook Not Uploaded or Not Clearly Visible",
                "short_name" => "VisibleBankDocument",
                "parent_short_code" => "rejection_cause",
                 "code" => "123",
            ),
            array(
                "name" => "Aadhaar Document Not Uploaded or Not Clearly Visible",
                "short_name" => "VisibleAadharDocument",
                "parent_short_code" => "rejection_cause",
                 "code" => "124",
            ),
            array(
                "name" => "Caste Cerificate Document Not Uploaded or Not Clearly Visible",
                "short_name" => "VisibleCasteDocument",
                "parent_short_code" => "rejection_cause",
                 "code" => "125",
            ),
            array(
                "name" => "Caste Cerificate Number Not Avilable",
                "short_name" => "CasteCerificate",
                "parent_short_code" => "rejection_cause",
                 "code" => "126",
            ),
            array(
                "name" => "DOB Invalid",
                "short_name" => "DOBINVALID",
                "parent_short_code" => "rejection_cause",
                 "code" => "127",
            ),
            array(
                "name" => "Some of the Document not clearly visible",
                "short_name" => "somedocnotvisible",
                "parent_short_code" => "rejection_cause",
                 "code" => "128",
            ),
            array(
                "name" => "Rejection due to Death",
                "short_name" => "deathcasue",
                "parent_short_code" => "rejection_cause",
                 "code" => "129",
            ),
            array(
                "name" => "Father",
                "short_name" => "relationshipfather",
                "parent_short_code" => "relationship",
                 "code" => "131",
            ),
            array(
                "name" => "Mother",
                "short_name" => "relationshipmother",
                "parent_short_code" => "relationship",
                 "code" => "132",
            ),
            array(
                "name" => "Spouse",
                "short_name" => "relationshipspouse",
                "parent_short_code" => "relationship",
                 "code" => "133",
            ),
            array(
                "name" => "NO AADHAR NUMBER",
                "short_name" => "no_aadhar_number",
                "parent_short_code" => "incomplete_details",
                 "code" => "141",
            ),
            array(
                "name" => "NO MOBILE NUMBER",
                "short_name" => "no_mobile_number",
                "parent_short_code" => "incomplete_details",
                 "code" => "142",
            ),
            array(
                "name" => "NO AADHAR DOCUMENT",
                "short_name" => "no_aadhar_document",
                "parent_short_code" => "incomplete_details",
                 "code" => "143",
            ),
            array(
                "name" => "BANK PASSBOOK NOT AVAILABLE",
                "short_name" => "bank_passbook_not_available",
                "parent_short_code" => "incomplete_details",
                 "code" => "144",
            ),
            array(
                "name" => "NAME VALIDATION  FAILED IN BANK",
                "short_name" => "name_validation_failed_in_bank",
                "parent_short_code" => "incomplete_details",
                 "code" => "145",
            ),
            array(
                "name" => "ACCOUNT NUMBER VALIDATION  FAILED IN BANK",
                "short_name" => "account_number_validation_failed_in_bank",
                "parent_short_code" => "incomplete_details",
                 "code" => "146",
            ),
            array(
                "name" => "NO CASTE CERTIFICATE NUMBER",
                "short_name" => "no_caste_certificate_number",           
                "parent_short_code" => "incomplete_details",
                 "code" => "147",
            ),
            array(
                "name" => "NO CASTE DOCUMENT",
                "short_name" => "no_caste_document",
                "parent_short_code" => "incomplete_details",
                 "code" => "148",
            ),
            array(
                "name" => "DUPLICATE AADHAR NUMBER",
                "short_name" => "duplicate_aadhar_number",
                "parent_short_code" => "incomplete_details",
                 "code" => "149",
            ),
            array(
                "name" => "DUPLICATE MOBILE NUMBER",
                "short_name" => "duplicate_mobile_number",
                "parent_short_code" => "incomplete_details",
                 "code" => "1410",
            ),
            array(
                "name" => "DUPLICATE BANK ACCOUNT NUMBER",
                "short_name" => "duplicate_bank_account_number",
                "parent_short_code" => "incomplete_details",
                 "code" => "1411",
            ),   
            array(
                "name" => "STATE OFFICE",
                "short_name" => "state_office",
                "parent_short_code" => "office_type",
                 "code" => "151",
            ),
            array(
                "name" => "DISTRICT OFFICE",
                "short_name" => "district_office",
                "parent_short_code" => "office_type",
                 "code" => "152",
            ),
            array(
                "name" => "BLOCK OFFICE",
                "short_name" => "block_office",
                "parent_short_code" => "office_type",
                 "code" => "153",
            ),
            array(
                "name" => "SUBDIVISION OFFICE",
                "short_name" => "subdivision_office",
                "parent_short_code" => "office_type",
                 "code" => "154",
            ),
            array(
                "name" => "MUNICIPALITY OFFICE",
                "short_name" => "municipality_office",
                "parent_short_code" => "office_type",
                 "code" => "155",
            ),
            array(
                "name" => "PANCHAYAT OFFICE",
                "short_name" => "panchayat_office",
                "parent_short_code" => "office_type",
                 "code" => "156",
            ),
            array(
                "name" => "WARD OFFICE",
                "short_name" => "ward_office",
                "parent_short_code" => "office_type",
                 "code" => "159",
            ),
            array(
                
                "name" => "Passport size profile photo",
                "short_name" => "profile_photo_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "161",
            ),
            array(
                "name" => "Copy of Caste Certificate",
                "short_name" => "caste_certificate_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "162",
            ),
            array(
                "name" => "Copy of Disability Certificate from Appropriate Authority",
                "short_name" => "disability_certificate_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "163",
            ),
            array(
                "name" => "Copy of Digital Ration Card",
                "short_name" => "ration_card_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "164",
            ),
            array(
                "name" => "Copy of Aadhar Card",
                "short_name" => "aadhar_card_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "165",
            ),
            array(
                "name" => "Copy of EPIC/ Voter Id",
                "short_name" => "voter_id_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "166",
            ),
            array(
                "name" => "Copy of Residential Certificate(Self Declaration)",
                "short_name" => "residential_certificate_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "167",
            ),
            array(
                "name" => "Copy of Income Certificate(Self Declaration)",
                "short_name" => "income_certificate_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "168",
            ),
            array(
                "name" => "Copy of Bank Pass book",
                "short_name" => "bank_pass_book_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "169",
            ),
            array(
                "name" => "Others, please specify",
                "short_name" => "others_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1610",
            ),
            array(
                "name" => "Copy of Death Certificate",
                "short_name" => "death_certificate_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1611",
            ),
            array(
                "name" => "Copy of ineligibility letter",
                "short_name" => "ineligibility_letter_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1612",
            ),
            array(
                "name" => "Copy of Digital Certificate from Appropriate Authority",
                "short_name" => "digital_certificate_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1613",
            ),
            array(
                "name" => "Birth registration Certificate",
                "short_name" => "birth_registration_certificate_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1614",
            ),
            array(
                "name" => "Husband's Death Certificate",
                "short_name" => "husband_death_certificate_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1615",
            ),
            array(
                "name" => "Copy of Khatian(ROR)/Deed",
                "short_name" => "khatian_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1616",
            ),
            array(
                "name" => "Copy of PAN Card",
                "short_name" => "pan_card_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1617",
            ),
            array(
                "name" => "Certificate from school",
                "short_name" => "certificate_from_school_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1618",
            ),
            array(
                "name" => "Certificate from Secondary Education Board",
                "short_name" => "Secondary_education_board_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1619",
            ),
            array(
                "name" => "Certificate from recognized educational institution",
                "short_name" => "educational_institution_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1620",
            ),
            array(
                "name" => "Certificate from the Sabhapati of a PanchayatSamity",
                "short_name" => "sabhapati_panchayatSamity_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1621",
            ),
            array(
                "name" => "Certificate from the chairman of a municipal corporation ( in case of a urban area)",
                "short_name" => "chairman_municipal_corporation_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1622",
            ),
            array(
                "name" => "Certificate from a Government Medical Officer",
                "short_name" => "medical_officer_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1623",
            ),
            array(
                "name" => "Aadhaar consent form",
                "short_name" => "aadhaar_consent_form_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1624",
            ),
            array(
                "name" => "Investigation report",
                "short_name" => "investigation_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1625",
            ),
            array(
                "name" => "Self-Declaration of Applicant that she is not remarried",
                "short_name" => "remarried_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1626",
            ),
            array(
                "name" => "Age Proof documets",
                "short_name" => "age_proof_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1627",
            ),
            array(
                "name" => "Copy of Confirmation of Bank Account Validation Form",
                "short_name" => "bank_account_validation_form_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1628",
            ),
            array(
                "name" => "Supporting Age Document",
                "short_name" => "age_document_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1629",
            ),
            array(
                "name" => "Reasoned Order",
                "short_name" => "reasoned_order_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1630",
            ),
            array(
                "name" => "Enquiry Document",
                "short_name" => "enquiry_document_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1631",
            ),
            array(
                "name" => "Life Certificate",
                "short_name" => "life_certificate_enc",
                "parent_short_code" => "ENCDETAILS",
                 "code" => "1632",
            ),

        );
        foreach ($codemasterChilds as $codemasterChild_item) {
            Codemaster::create([
                'name' => strtoupper($codemasterChild_item['name']),
                'code' => $codemasterChild_item['code'],
                'parent_short_code' => $codemasterChild_item['parent_short_code'],
                'short_name'     => $codemasterChild_item['short_name'],
                'parent_id'   => Codemaster::where('short_name', $codemasterChild_item['parent_short_code'])->firstOrFail()->id,
            ]);
        }
    }
}
