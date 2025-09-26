"use client";
import styles from './Navbar.module.css';
import Image from 'next/image';

const Navbar = () => {
    return(
    <nav className={styles.navbar}>
        <Image src="/wordmark.svg" alt="Station Logo" width={176} height={30} />
    </nav>
)
};
export default Navbar;