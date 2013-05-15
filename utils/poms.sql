/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2013/5/15 ÐÇÆÚÈý 17:30:26                       */
/*==============================================================*/


drop table if exists ArticelTopic;

drop table if exists BlackList;

drop table if exists BlackWords;

drop table if exists Messages;

drop table if exists SystemSet;

drop table if exists TargetWebsites;

drop table if exists Topics;

drop table if exists Users;

/*==============================================================*/
/* Table: ArticelTopic                                          */
/*==============================================================*/
create table ArticelTopic
(
   Id                   int not null,
   URL                  varchar(256),
   PubTime              datetime,
   DetectedTime         datetime,
   primary key (Id)
);

/*==============================================================*/
/* Table: BlackList                                             */
/*==============================================================*/
create table BlackList
(
   Id                   int not null,
   Title                varchar(256),
   URL                  varchar(256),
   HBlackWords          varchar(1024),
   CBlackWords          varchar(1024),
   PubTime              datetime,
   FoundTime            datetime,
   Content              text,
   primary key (Id)
);

/*==============================================================*/
/* Table: BlackWords                                            */
/*==============================================================*/
create table BlackWords
(
   Id                   int not null,
   HighLevel            text,
   Common               text,
   primary key (Id)
);

/*==============================================================*/
/* Table: Messages                                              */
/*==============================================================*/
create table Messages
(
   Id                   int not null,
   Title                varchar(128),
   Grade                int,
   Description          varchar(1024),
   Time                 datetime,
   IsAlarm              bool,
   Message              text,
   primary key (Id)
);

/*==============================================================*/
/* Table: SystemSet                                             */
/*==============================================================*/
create table SystemSet
(
   Id                   int not null,
   MailEnable           bool,
   MailList             varchar(2048),
   SMSEnable            bool,
   MNumberList          varchar(2048),
   primary key (Id)
);

/*==============================================================*/
/* Table: TargetWebsites                                        */
/*==============================================================*/
create table TargetWebsites
(
   Id                   int not null,
   URL                  varchar(256),
   Description          varchar(1024),
   Type                 int,
   Priority             int,
   CBlackWords          text,
   NContain             text,
   HBlackWords          text,
   Status               bool,
   Remark               varchar(1024),
   CreateTime           datetime,
   primary key (Id)
);

/*==============================================================*/
/* Table: Topics                                                */
/*==============================================================*/
create table Topics
(
   Id                   int not null,
   Title                varchar(128),
   Points               text,
   FirstTime            datetime,
   FirstURL             varchar(128),
   RecentlyURL          varchar(128),
   PrimaryURL           varchar(128),
   RecentlyTime         datetime,
   Frequency            int,
   primary key (Id)
);

/*==============================================================*/
/* Table: Users                                                 */
/*==============================================================*/
create table Users
(
   Id                   int not null,
   Account              varchar(64),
   Password             varchar(64),
   Name                 varchar(32),
   Email                varchar(128),
   Phone                varchar(16),
   Mobile               varchar(16),
   Role                 int,
   Status               bool,
   CreateTime           datetime,
   primary key (Id)
);

