/*!
 * stande setting js for Pardot
 * 項目のマッピングおよびアカウントキーの設定
 * Copyright 2021, B-Story Inc. All Rights Reserved.
 */

// Mapping IDs (#)
let formIDMapping = {
  corporate_name: 'company',
  // phone_number: 'phone',
  zip_code: 'zip',
  prefecture: 'prefecture',
  city: 'city',
  address: 'address',
  hp_url: 'web_url',
  employee_val: 'employees',
  revenue_val: 'annual_sales',
  capital_val: 'capital',
  industry_kbn: 'industry',
  corporate_number: 'corporate_number',
};

// set an argument
let arg = new StandeArgument();

// This account ID is mandatory.
arg.accountId = 'BK1xY8NSM99hLfd';

// This mapping data is mandatory.
arg.formIdMapping = formIDMapping;

// enableOnSelect is optional:
// true by default will be applied if not specified.
arg.enableOnSelect = true;

// run
let stande = new Stande(arg);
