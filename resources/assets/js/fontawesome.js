import {
    library
} from '@fortawesome/fontawesome-svg-core'

import {
    faFacebookMessenger as fabFacebookMessenger,
    faSlack             as fabSlack,
    faTwitter           as fabTwitter,
} from '@fortawesome/free-brands-svg-icons'

import {
    faAt             as farAt,
    faFax            as farFax,
    faFile           as farFile,
    faFileArchive    as farFileArchive,
    faFileCode       as farFileCode,
    faFileCsv        as farFileCsv,
    faFileExcel      as farFileExcel,
    faFilePdf        as farFilePdf,
    faFilePowerpoint as farFilePowerPoint,
    faFileWord       as farFileWord,
    faHome           as farHome,
    faPhone          as farPhone,
} from '@fortawesome/pro-regular-svg-icons'

import {
    faAt             as fasAt,
    faFax            as fasFax,
    faFile           as fasFile,
    faFileArchive    as fasFileArchive,
    faFileCode       as fasFileCode,
    faFileCsv        as fasFileCsv,
    faFileExcel      as fasFileExcel,
    faFilePdf        as fasFilePdf,
    faFilePowerpoint as fasFilePowerPoint,
    faFileWord       as fasFileWord,
    faHome           as fasHome,
    faPhone          as fasPhone,
} from '@fortawesome/pro-solid-svg-icons'

import {
    FontAwesomeIcon
} from '@fortawesome/vue-fontawesome'

library.add(
    // Brands
    fabFacebookMessenger,
    fabSlack,
    fabTwitter,

    // Regular
    farAt,
    farFax,
    farFile,
    farFileArchive,
    farFileCode,
    farFileCsv,
    farFileExcel,
    farFilePdf,
    farFilePowerPoint,
    farFileWord,
    farHome,
    farPhone,

    // Solid
    fasAt,
    fasFax,
    fasFile,
    fasFileArchive,
    fasFileCode,
    fasFileCsv,
    fasFileExcel,
    fasFilePdf,
    fasFilePowerPoint,
    fasFileWord,
    fasHome,
    fasPhone,
)

Vue.component('font-awesome-icon', FontAwesomeIcon)
