'use client';
import React, { createContext, useContext, useState, useEffect, ReactNode } from 'react';

export type Translations = Record<string, string>;

interface DictionaryContextProps {
  language: string;
  changeLanguage: (lang: string) => void;
  translations: Translations;
}

const DictionaryContext = createContext<DictionaryContextProps | undefined>(undefined);

export const useDictionary = () => {
  const context = useContext(DictionaryContext);
  if (!context) {
    throw new Error("useDictionary must be used within a DictionaryProvider");
  }
  return context;
};

const loadTranslations = async (lang: string): Promise<Translations> => {

  const langData = await import(`./${lang}.json`);
  return langData.default;
};

interface ProviderProps {
  children: ReactNode;
}

export const DictionaryProvider = ({ children }: ProviderProps) => {
  const storedLanguage = typeof window !== 'undefined' ? localStorage.getItem('language') : null;
  const [language, setLanguage] = useState<string>(storedLanguage || 'en');
  const [translations, setTranslations] = useState<Translations>({});

  useEffect(() => {
    const fetchTranslations = async () => {
      const langData = await loadTranslations(language);
      setTranslations(langData);
    };
    fetchTranslations();
  }, [language]);

  const changeLanguage = (lang: string) => {
    setLanguage(lang);
    if (typeof window !== 'undefined') {
      localStorage.setItem('language', lang);
    }
  };

  return (
    <DictionaryContext.Provider value={{ language, changeLanguage, translations }}>
      {children}
    </DictionaryContext.Provider>
  );
};