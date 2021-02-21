/*
 Navicat Premium Data Transfer

 Source Server         : heroku
 Source Server Type    : PostgreSQL
 Source Server Version : 120006
 Source Host           : ec2-3-231-48-230.compute-1.amazonaws.com:5432
 Source Catalog        : d1bfc30govrusa
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 120006
 File Encoding         : 65001

 Date: 20/02/2021 23:28:33
*/


-- ----------------------------
-- Sequence structure for game_game_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."game_game_id_seq";
CREATE SEQUENCE "public"."game_game_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for goals_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."goals_id_seq";
CREATE SEQUENCE "public"."goals_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;


-- ----------------------------
-- Sequence structure for parents_parent_Child_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."parents_parent_Child_id_seq";
CREATE SEQUENCE "public"."parents_parent_Child_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for persons_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."persons_id_seq";
CREATE SEQUENCE "public"."persons_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;


-- ----------------------------
-- Sequence structure for team_members_team_member_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."team_members_team_member_id_seq";
CREATE SEQUENCE "public"."team_members_team_member_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for teams_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."teams_id_seq";
CREATE SEQUENCE "public"."teams_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;


-- ----------------------------
-- Sequence structure for user_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."user_id_seq";
CREATE SEQUENCE "public"."user_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for users_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."users_id_seq";
CREATE SEQUENCE "public"."users_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Table structure for game
-- ----------------------------
DROP TABLE IF EXISTS "public"."game";
CREATE TABLE "public"."game" (
  "game_id" int8 NOT NULL DEFAULT nextval('game_game_id_seq'::regclass),
  "home_team_id" int8 NOT NULL,
  "away_team_id" int8 NOT NULL,
  "game_time" daterange,
  "surface_id" int4,
  "field_number" int4
)
;

-- ----------------------------
-- Table structure for goals
-- ----------------------------
DROP TABLE IF EXISTS "public"."goals";
CREATE TABLE "public"."goals" (
  "id" int4 NOT NULL DEFAULT nextval('goals_id_seq'::regclass),
  "title" varchar COLLATE "pg_catalog"."default" NOT NULL,
  "description" text COLLATE "pg_catalog"."default" NOT NULL
)
;


-- ----------------------------
-- Table structure for parents
-- ----------------------------
DROP TABLE IF EXISTS "public"."parents";
CREATE TABLE "public"."parents" (
  "is_Custodial" bool NOT NULL DEFAULT true,
  "is_Blocked" bool NOT NULL DEFAULT false,
  "parent_person_id" int8 NOT NULL,
  "parent_child_id" int8 NOT NULL DEFAULT nextval('"parents_parent_Child_id_seq"'::regclass)
)
;

-- ----------------------------
-- Table structure for person_person_link
-- ----------------------------
DROP TABLE IF EXISTS "public"."person_person_link";
CREATE TABLE "public"."person_person_link" (
  "person1_id" int4 NOT NULL,
  "person2_id" int4 NOT NULL,
  "person1_role" varchar COLLATE "pg_catalog"."default" NOT NULL,
  "person2_role" varchar COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Table structure for persons
-- ----------------------------
DROP TABLE IF EXISTS "public"."persons";
CREATE TABLE "public"."persons" (
  "id" int4 NOT NULL DEFAULT nextval('persons_id_seq'::regclass),
  "first_name" varchar(45) COLLATE "pg_catalog"."default" NOT NULL,
  "last_name" varchar(45) COLLATE "pg_catalog"."default" NOT NULL,
  "nick_name" varchar(45) COLLATE "pg_catalog"."default",
  "birthdate" date,
  "is_female" bool,
  "user_id" int4,
  "goal_id" int4,
  "mobile_number" text COLLATE "pg_catalog"."default",
  "password" varchar(255) COLLATE "pg_catalog"."default",
  "email" varchar(55) COLLATE "pg_catalog"."default"
)
;


-- ----------------------------
-- Table structure for team_members
-- ----------------------------
DROP TABLE IF EXISTS "public"."team_members";
CREATE TABLE "public"."team_members" (
  "team_id" int4 NOT NULL,
  "member_id" int4 NOT NULL,
  "role" varchar(45) COLLATE "pg_catalog"."default" NOT NULL,
  "team_member_id" int8 NOT NULL DEFAULT nextval('team_members_team_member_id_seq'::regclass)
)
;

-- ----------------------------
-- Table structure for teams
-- ----------------------------
DROP TABLE IF EXISTS "public"."teams";
CREATE TABLE "public"."teams" (
  "id" int4 NOT NULL DEFAULT nextval('teams_id_seq'::regclass),
  "name" varchar(45) COLLATE "pg_catalog"."default" NOT NULL,
  "age" int4 NOT NULL,
  "sport" varchar(45) COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS "public"."user";
CREATE TABLE "public"."user" (
  "id" int4 NOT NULL DEFAULT nextval('user_id_seq'::regclass),
  "user_name" varchar(45) COLLATE "pg_catalog"."default" NOT NULL,
  "password" varchar(255) COLLATE "pg_catalog"."default" NOT NULL
)
;


-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."game_game_id_seq"
OWNED BY "public"."game"."game_id";
SELECT setval('"public"."game_game_id_seq"', 2, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."goals_id_seq"
OWNED BY "public"."goals"."id";
SELECT setval('"public"."goals_id_seq"', 2, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."parents_parent_Child_id_seq"
OWNED BY "public"."parents"."parent_child_id";
SELECT setval('"public"."parents_parent_Child_id_seq"', 5, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."persons_id_seq"
OWNED BY "public"."persons"."id";
SELECT setval('"public"."persons_id_seq"', 19, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."team_members_team_member_id_seq"
OWNED BY "public"."team_members"."team_member_id";
SELECT setval('"public"."team_members_team_member_id_seq"', 8, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."teams_id_seq"
OWNED BY "public"."teams"."id";
SELECT setval('"public"."teams_id_seq"', 4, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."user_id_seq"
OWNED BY "public"."user"."id";
SELECT setval('"public"."user_id_seq"', 8, true);

-- ----------------------------
-- Primary Key structure for table game
-- ----------------------------
ALTER TABLE "public"."game" ADD CONSTRAINT "game_pkey" PRIMARY KEY ("game_id");

-- ----------------------------
-- Primary Key structure for table goals
-- ----------------------------
ALTER TABLE "public"."goals" ADD CONSTRAINT "goals_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table parents
-- ----------------------------
ALTER TABLE "public"."parents" ADD CONSTRAINT "parents_pkey" PRIMARY KEY ("parent_child_id", "parent_person_id");

-- ----------------------------
-- Primary Key structure for table person_person_link
-- ----------------------------
ALTER TABLE "public"."person_person_link" ADD CONSTRAINT "person_person_link_pkey" PRIMARY KEY ("person1_id", "person2_id");

-- ----------------------------
-- Primary Key structure for table persons
-- ----------------------------
ALTER TABLE "public"."persons" ADD CONSTRAINT "persons_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table team_members
-- ----------------------------
ALTER TABLE "public"."team_members" ADD CONSTRAINT "team_members_pkey" PRIMARY KEY ("team_member_id");

-- ----------------------------
-- Primary Key structure for table teams
-- ----------------------------
ALTER TABLE "public"."teams" ADD CONSTRAINT "teams_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table user
-- ----------------------------
ALTER TABLE "public"."user" ADD CONSTRAINT "user_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Foreign Keys structure for table game
-- ----------------------------
ALTER TABLE "public"."game" ADD CONSTRAINT "away_team_game_id_FK" FOREIGN KEY ("away_team_id") REFERENCES "public"."teams" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "public"."game" ADD CONSTRAINT "home_team_game_id_FK" FOREIGN KEY ("home_team_id") REFERENCES "public"."teams" ("id") ON DELETE CASCADE ON UPDATE CASCADE;

-- ----------------------------
-- Foreign Keys structure for table parents
-- ----------------------------
ALTER TABLE "public"."parents" ADD CONSTRAINT "person_child_FK" FOREIGN KEY ("parent_child_id") REFERENCES "public"."persons" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "public"."parents" ADD CONSTRAINT "person_parent_FK" FOREIGN KEY ("parent_person_id") REFERENCES "public"."persons" ("id") ON DELETE CASCADE ON UPDATE CASCADE;

-- ----------------------------
-- Foreign Keys structure for table person_person_link
-- ----------------------------
ALTER TABLE "public"."person_person_link" ADD CONSTRAINT "person_person_link_person1_id_fkey" FOREIGN KEY ("person1_id") REFERENCES "public"."persons" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."person_person_link" ADD CONSTRAINT "person_person_link_person2_id_fkey" FOREIGN KEY ("person2_id") REFERENCES "public"."persons" ("id") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table persons
-- ----------------------------
ALTER TABLE "public"."persons" ADD CONSTRAINT "persons_goal_id" FOREIGN KEY ("goal_id") REFERENCES "public"."goals" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "public"."persons" ADD CONSTRAINT "persons_user_id_fkey" FOREIGN KEY ("user_id") REFERENCES "public"."user" ("id") ON DELETE CASCADE ON UPDATE CASCADE;

-- ----------------------------
-- Foreign Keys structure for table team_members
-- ----------------------------
ALTER TABLE "public"."team_members" ADD CONSTRAINT "team_members_member_id_fkey" FOREIGN KEY ("member_id") REFERENCES "public"."persons" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "public"."team_members" ADD CONSTRAINT "team_members_team_id_fkey" FOREIGN KEY ("team_id") REFERENCES "public"."teams" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
