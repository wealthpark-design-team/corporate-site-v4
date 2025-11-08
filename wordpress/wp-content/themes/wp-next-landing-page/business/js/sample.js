/*!
 * stande setting js
 * 項目のマッピングおよびアカウントキーの設定
 * Copyright 2021, B-Story Inc. All Rights Reserved.
 */

// Mapping IDs (#)
const formIDMapping = {
	corporate_name : document.querySelector("p.company input").id,
	zip_code : document.querySelector("p.zip input").id,	
	prefecture : document.querySelector("p.state input").id,
	city : document.querySelector("p.city input").id,
	address : document.querySelector("p.address_one input").id,
	hp_url : document.querySelector("p.website input").id,
	employee_val : document.querySelector("p.employees input").id,
	revenue_val : document.querySelector("p.annual_revenue input").id,
	capital_val : document.querySelector("p.capital input").id,
	industry_kbn : document.querySelector("p.businessCategory input").id,
	corporate_number : document.querySelector("p.corporate_number input").id
	};

// set an argument
const arg = new StandeArgument()

// This account ID is mandatory.
arg.accountId = 'BK1xY8NSM99hLfd'

// This mapping data is mandatory.
arg.formIdMapping = formIDMapping

// enableOnSelect is optional:
// true by default will be applied if not specified.
arg.enableOnSelect = true

// message:デフォルト（記述不要）
arg.msgOnDropdown = "　会社検索して候補から選択してください"

// run 
const stande = new Stande(arg)