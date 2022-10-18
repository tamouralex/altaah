CREATE TABLE tt_content (
        tx_altaah1package_inmainmenu tinyint(4) DEFAULT '0' NOT NULL,
        tx_altaah1package_indropmenu tinyint(4) DEFAULT '0' NOT NULL,
        tx_altaah1package_nav_title varchar(255) DEFAULT '' NOT NULL,
        tx_altaah1package_nav_url varchar(255) DEFAULT '' NOT NULL
);

CREATE TABLE pages (
        tx_altaah1package_dropheader varchar(255) DEFAULT '' NOT NULL
);
