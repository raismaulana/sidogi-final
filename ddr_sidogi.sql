-- MySQL Script generated by MySQL Workbench
-- Fri Mar 29 15:52:56 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ddr_sidogi
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ddr_sidogi
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ddr_sidogi` DEFAULT CHARACTER SET utf8 ;
USE `ddr_sidogi` ;

-- -----------------------------------------------------
-- Table `ddr_sidogi`.`petugas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ddr_sidogi`.`petugas` (
  `id_petugas` INT NOT NULL AUTO_INCREMENT,
  `nama_petugas` VARCHAR(50) NULL,
  `tanggallahir_petugas` DATE NULL,
  `alamat_petugas` VARCHAR(100) NULL,
  `gender_petugas` VARCHAR(10) NULL,
  `notelp_petugas` VARCHAR(20) NULL,
  `jabatan_petugas` VARCHAR(45) NULL,
  `foto` VARCHAR(225) NULL,
  `tanggaldaftar_petugas` DATE NULL,
  `status_petugas` INT(1) NOT NULL COMMENT '0 == tidak aktif\n1 == aktif',
  PRIMARY KEY (`id_petugas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ddr_sidogi`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ddr_sidogi`.`user` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `hakakses` VARCHAR(45) NOT NULL COMMENT 'dokter || petugas',
  `petugas_id_petugas` INT NULL,
  PRIMARY KEY (`id_user`),
  INDEX `fk_tb_user_tb_petugas1_idx` (`petugas_id_petugas` ASC),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC),
  CONSTRAINT `fk_tb_user_tb_petugas1`
    FOREIGN KEY (`petugas_id_petugas`)
    REFERENCES `ddr_sidogi`.`petugas` (`id_petugas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ddr_sidogi`.`pasien`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ddr_sidogi`.`pasien` (
  `id_pasien` INT NOT NULL AUTO_INCREMENT,
  `koderekammedis_pasien` VARCHAR(45) NOT NULL,
  `nama_pasien` VARCHAR(50) NULL,
  `tempatlahir_pasien` VARCHAR(45) NULL,
  `tanggallahir_pasien` DATE NULL,
  `nik_pasien` VARCHAR(100) NULL,
  `gender_pasien` VARCHAR(10) NULL,
  `sukuras_pasien` VARCHAR(45) NULL,
  `pekerjaan_pasien` VARCHAR(50) NULL,
  `alamat_pasien` VARCHAR(100) NULL,
  `notelp_pasien` VARCHAR(20) NULL,
  `alamatkantor_pasien` VARCHAR(75) NULL,
  `notelpkantor_pasien` VARCHAR(20) NULL,
  `golongandarah_pasien` VARCHAR(3) NULL,
  `tekanandarah_pasien` VARCHAR(10) NULL,
  `penyakitjantung_pasien` VARCHAR(45) NULL COMMENT '1 == ada\n0 == tidak ada',
  `diabetes_pasien` VARCHAR(45) NULL COMMENT '1 == ada\n0 == tidak ada',
  `hemophilia_pasien` VARCHAR(45) NULL,
  `hepatitis_pasien` VARCHAR(45) NULL COMMENT '1 == ada\n0 == tidak ada',
  `gastritis_pasien` VARCHAR(45) NULL COMMENT '1 == ada\n0 == tidak ada',
  `penyakitlain_pasien` VARCHAR(45) NULL,
  `alergiobat_pasien` VARCHAR(45) NULL,
  `alergimakanan_pasien` VARCHAR(45) NULL,
  `tanggaldaftar_pasien` DATE NULL,
  `status_pasien` INT(1) NOT NULL DEFAULT 0 COMMENT '0 == baru\n1 == lama',
  `user_id_user` INT NULL COMMENT 'Petugas yang mendaftarkan',
  PRIMARY KEY (`id_pasien`),
  INDEX `fk_tb_pasien_tb_user1_idx` (`user_id_user` ASC),
  UNIQUE INDEX `koderekammedis_pasien_UNIQUE` (`koderekammedis_pasien` ASC),
  CONSTRAINT `fk_tb_pasien_tb_user1`
    FOREIGN KEY (`user_id_user`)
    REFERENCES `ddr_sidogi`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ddr_sidogi`.`odontogram`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ddr_sidogi`.`odontogram` (
  `id_odontogram` INT NOT NULL AUTO_INCREMENT,
  `a11[51]` VARCHAR(100) NULL,
  `a12[52]` VARCHAR(100) NULL,
  `a13[53]` VARCHAR(100) NULL,
  `a14[54]` VARCHAR(100) NULL,
  `a15[55]` VARCHAR(100) NULL,
  `a16` VARCHAR(100) NULL,
  `a17` VARCHAR(100) NULL,
  `a18` VARCHAR(100) NULL,
  `a[61]21` VARCHAR(100) NULL,
  `a[62]22` VARCHAR(100) NULL,
  `a[63]23` VARCHAR(100) NULL,
  `a[64]24` VARCHAR(100) NULL,
  `a[65]25` VARCHAR(100) NULL,
  `a26` VARCHAR(100) NULL,
  `a27` VARCHAR(100) NULL,
  `a28` VARCHAR(100) NULL,
  `a[71]31` VARCHAR(100) NULL,
  `a[72]32` VARCHAR(100) NULL,
  `a[73]33` VARCHAR(100) NULL,
  `a[74]34` VARCHAR(100) NULL,
  `a[75]35` VARCHAR(100) NULL,
  `a36` VARCHAR(100) NULL,
  `a37` VARCHAR(100) NULL,
  `a38` VARCHAR(100) NULL,
  `a41[81]` VARCHAR(100) NULL,
  `a42[82]` VARCHAR(100) NULL,
  `a43[83]` VARCHAR(100) NULL,
  `a44[84]` VARCHAR(100) NULL,
  `a45[85]` VARCHAR(100) NULL,
  `a46` VARCHAR(100) NULL,
  `a47` VARCHAR(100) NULL,
  `a48` VARCHAR(100) NULL,
  `occlusi_odontogram` VARCHAR(100) NULL,
  `toruspalatinus_odontogram` VARCHAR(100) NULL,
  `torusmandibularis_odontogram` VARCHAR(100) NULL,
  `palatum_odontogram` VARCHAR(100) NULL,
  `diastema_odontogram` VARCHAR(100) NULL,
  `gigianomali_odontogram` VARCHAR(100) NULL,
  `lainlain_odontogram` VARCHAR(100) NULL,
  `d_odontogram` VARCHAR(100) NULL,
  `m_odontogram` VARCHAR(100) NULL,
  `f_odontogram` VARCHAR(100) NULL,
  `tanggalperiksa_odontogram` DATE NULL,
  `pasien_id_pasien` INT NOT NULL,
  `user_id_user` INT NULL,
  PRIMARY KEY (`id_odontogram`),
  INDEX `fk_tb_odontogram_tb_pasien1_idx` (`pasien_id_pasien` ASC),
  INDEX `fk_tb_odontogram_tb_user1_idx` (`user_id_user` ASC),
  CONSTRAINT `fk_tb_odontogram_tb_pasien1`
    FOREIGN KEY (`pasien_id_pasien`)
    REFERENCES `ddr_sidogi`.`pasien` (`id_pasien`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_odontogram_tb_user1`
    FOREIGN KEY (`user_id_user`)
    REFERENCES `ddr_sidogi`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ddr_sidogi`.`rekammedis`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ddr_sidogi`.`rekammedis` (
  `id_rekammedis` INT NOT NULL AUTO_INCREMENT,
  `kodekunjungan_rekammedis` VARCHAR(100) NULL,
  `tanggal_rekammedis` DATE NOT NULL,
  `keterangan_rekammedis` VARCHAR(100) NULL,
  `status_rekammedis` INT(1) NOT NULL COMMENT '0 == antri\n1 == selesai',
  `pasien_id_pasien` INT NOT NULL COMMENT 'pemilik rekam medis',
  `user_id_user` INT NOT NULL COMMENT 'petugas yang merekam',
  PRIMARY KEY (`id_rekammedis`),
  INDEX `fk_tb_rekammedis_tb_pasien1_idx` (`pasien_id_pasien` ASC),
  INDEX `fk_tb_rekammedis_tb_user1_idx` (`user_id_user` ASC),
  UNIQUE INDEX `kode_rekammedis_UNIQUE` (`kodekunjungan_rekammedis` ASC),
  CONSTRAINT `fk_tb_rekammedis_tb_pasien1`
    FOREIGN KEY (`pasien_id_pasien`)
    REFERENCES `ddr_sidogi`.`pasien` (`id_pasien`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_rekammedis_tb_user1`
    FOREIGN KEY (`user_id_user`)
    REFERENCES `ddr_sidogi`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ddr_sidogi`.`obat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ddr_sidogi`.`obat` (
  `id_obat` INT NOT NULL AUTO_INCREMENT,
  `nama_obat` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_obat`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ddr_sidogi`.`obat_has_rekammedis`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ddr_sidogi`.`obat_has_rekammedis` (
  `obat_id_obat` INT NOT NULL,
  `rekammedis_id_rekammedis` INT NOT NULL,
  PRIMARY KEY (`obat_id_obat`, `rekammedis_id_rekammedis`),
  INDEX `fk_obat_has_rekammedis_rekammedis1_idx` (`rekammedis_id_rekammedis` ASC),
  INDEX `fk_obat_has_rekammedis_obat1_idx` (`obat_id_obat` ASC),
  CONSTRAINT `fk_obat_has_rekammedis_obat1`
    FOREIGN KEY (`obat_id_obat`)
    REFERENCES `ddr_sidogi`.`obat` (`id_obat`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_obat_has_rekammedis_rekammedis1`
    FOREIGN KEY (`rekammedis_id_rekammedis`)
    REFERENCES `ddr_sidogi`.`rekammedis` (`id_rekammedis`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ddr_sidogi`.`gigi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ddr_sidogi`.`gigi` (
  `id_gigi` INT NOT NULL AUTO_INCREMENT,
  `nama_gigi` VARCHAR(45) NULL,
  PRIMARY KEY (`id_gigi`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ddr_sidogi`.`gigi_has_rekammedis`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ddr_sidogi`.`gigi_has_rekammedis` (
  `gigi_id_gigi` INT NOT NULL,
  `rekammedis_id_rekammedis` INT NOT NULL,
  PRIMARY KEY (`gigi_id_gigi`, `rekammedis_id_rekammedis`),
  INDEX `fk_gigi_has_rekammedis_rekammedis1_idx` (`rekammedis_id_rekammedis` ASC),
  INDEX `fk_gigi_has_rekammedis_gigi1_idx` (`gigi_id_gigi` ASC),
  CONSTRAINT `fk_gigi_has_rekammedis_gigi1`
    FOREIGN KEY (`gigi_id_gigi`)
    REFERENCES `ddr_sidogi`.`gigi` (`id_gigi`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_gigi_has_rekammedis_rekammedis1`
    FOREIGN KEY (`rekammedis_id_rekammedis`)
    REFERENCES `ddr_sidogi`.`rekammedis` (`id_rekammedis`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ddr_sidogi`.`kodeicd10`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ddr_sidogi`.`kodeicd10` (
  `id_kodeicd10` INT NOT NULL AUTO_INCREMENT,
  `nama_kodeicd10` VARCHAR(45) NULL,
  `diagnosis_kodeicd10` VARCHAR(70) NULL,
  PRIMARY KEY (`id_kodeicd10`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ddr_sidogi`.`kodeicd10_has_rekammedis`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ddr_sidogi`.`kodeicd10_has_rekammedis` (
  `kodeicd10_id_kodeicd10` INT NOT NULL,
  `rekammedis_id_rekammedis` INT NOT NULL,
  PRIMARY KEY (`kodeicd10_id_kodeicd10`, `rekammedis_id_rekammedis`),
  INDEX `fk_kodeicd10_has_rekammedis_rekammedis1_idx` (`rekammedis_id_rekammedis` ASC),
  INDEX `fk_kodeicd10_has_rekammedis_kodeicd101_idx` (`kodeicd10_id_kodeicd10` ASC),
  CONSTRAINT `fk_kodeicd10_has_rekammedis_kodeicd101`
    FOREIGN KEY (`kodeicd10_id_kodeicd10`)
    REFERENCES `ddr_sidogi`.`kodeicd10` (`id_kodeicd10`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_kodeicd10_has_rekammedis_rekammedis1`
    FOREIGN KEY (`rekammedis_id_rekammedis`)
    REFERENCES `ddr_sidogi`.`rekammedis` (`id_rekammedis`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ddr_sidogi`.`perawatan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ddr_sidogi`.`perawatan` (
  `id_perawatan` INT NOT NULL AUTO_INCREMENT,
  `nama_perawatan` VARCHAR(255) NULL,
  PRIMARY KEY (`id_perawatan`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ddr_sidogi`.`perawatan_has_rekammedis`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ddr_sidogi`.`perawatan_has_rekammedis` (
  `perawatan_id_perawatan` INT NOT NULL,
  `rekammedis_id_rekammedis` INT NOT NULL,
  PRIMARY KEY (`perawatan_id_perawatan`, `rekammedis_id_rekammedis`),
  INDEX `fk_perawatan_has_rekammedis_rekammedis1_idx` (`rekammedis_id_rekammedis` ASC),
  INDEX `fk_perawatan_has_rekammedis_perawatan1_idx` (`perawatan_id_perawatan` ASC),
  CONSTRAINT `fk_perawatan_has_rekammedis_perawatan1`
    FOREIGN KEY (`perawatan_id_perawatan`)
    REFERENCES `ddr_sidogi`.`perawatan` (`id_perawatan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_perawatan_has_rekammedis_rekammedis1`
    FOREIGN KEY (`rekammedis_id_rekammedis`)
    REFERENCES `ddr_sidogi`.`rekammedis` (`id_rekammedis`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `ddr_sidogi` ;

-- -----------------------------------------------------
-- Placeholder table for view `ddr_sidogi`.`v_rekammedisBulananPerTahun`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ddr_sidogi`.`v_rekammedisBulananPerTahun` (`tahun_bulan` INT, `jumlah_bulanan` INT);

-- -----------------------------------------------------
-- Placeholder table for view `ddr_sidogi`.`v_kunjunganBulananPerTahun`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ddr_sidogi`.`v_kunjunganBulananPerTahun` (`tahun_bulan` INT, `jumlah_bulanan` INT);

-- -----------------------------------------------------
-- View `ddr_sidogi`.`v_rekammedisBulananPerTahun`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ddr_sidogi`.`v_rekammedisBulananPerTahun`;
USE `ddr_sidogi`;
CREATE  OR REPLACE VIEW `v_rekammedisBulananPerTahun` AS 
SELECT CONCAT(YEAR(tanggaldaftar_pasien),'-',MONTH(tanggaldaftar_pasien)) AS tahun_bulan, COUNT(*) AS jumlah_bulanan
FROM pasien
WHERE CONCAT(YEAR(tanggaldaftar_pasien))=CONCAT(YEAR(NOW()))
GROUP BY YEAR(tanggaldaftar_pasien), MONTH(tanggaldaftar_pasien);

-- -----------------------------------------------------
-- View `ddr_sidogi`.`v_kunjunganBulananPerTahun`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ddr_sidogi`.`v_kunjunganBulananPerTahun`;
USE `ddr_sidogi`;
CREATE  OR REPLACE VIEW `v_kunjunganBulananPerTahun` AS
SELECT CONCAT(YEAR(tanggal_rekammedis),'-',MONTH(tanggal_rekammedis)) AS tahun_bulan, COUNT(*) AS jumlah_bulanan
FROM rekammedis
WHERE CONCAT(YEAR(tanggal_rekammedis))=CONCAT(YEAR(NOW()))
GROUP BY YEAR(tanggal_rekammedis),MONTH(tanggal_rekammedis);

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
