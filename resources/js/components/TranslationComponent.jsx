import React, { useState } from 'react';
import axios from 'axios';

// Define the component as a named function first
function TranslationComponent() {
    const [inputText, setInputText] = useState('');
    const [translatedText, setTranslatedText] = useState('');
    const [loading, setLoading] = useState(false);
    const [error, setError] = useState('');    const handleTranslate = async () => {
        if (!inputText) {
            setError('Please enter text to translate');
            return;
        }

        setLoading(true);
        setError('');

        try {
            // Try LibreTranslate API first
            try {
                const response = await axios.post('https://libretranslate.de/translate', {
                    q: inputText,
                    source: 'id', // Indonesian
                    target: 'en', // English
                    format: 'text'
                }, {
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    timeout: 5000 // 5 second timeout
                });

                if (response.data && response.data.translatedText) {
                    setTranslatedText(response.data.translatedText);
                    setLoading(false);
                    return;
                }
            } catch (apiError) {
                console.warn('LibreTranslate API error, falling back to alternative method:', apiError);
                // Continue to fallback
            }

            // Fallback to Google Translate API through RapidAPI
            // Note: This requires an API key if implemented for production
            try {
                // Mock translation for demo purposes
                console.log('Using fallback translation mechanism');
                
                // Simple dictionary for common Indonesian words (just for demo)
                const dictionary = {
                    'halo': 'hello',
                    'selamat pagi': 'good morning',
                    'selamat siang': 'good afternoon',
                    'selamat malam': 'good evening',
                    'terima kasih': 'thank you',
                    'apa kabar': 'how are you',
                    'nama saya': 'my name is',
                    'saya': 'I',
                    'kamu': 'you',
                    'dia': 'he/she',
                    'kami': 'we',
                    'mereka': 'they',
                };

                // Simple word-by-word translation for demo
                const inputWords = inputText.toLowerCase().split(' ');
                const translatedWords = inputWords.map(word => 
                    dictionary[word] || word
                );

                // Add a small delay to simulate API request
                setTimeout(() => {
                    setTranslatedText(
                        translatedWords.join(' ') + 
                        '\n\n(Note: This is a simple demonstration. For a real translation, please set up an API key)'
                    );
                    setLoading(false);
                }, 1000);
                
                return;
            } catch (fallbackError) {
                throw fallbackError;
            }
        } catch (err) {
            console.error('Translation error:', err);
            setError('Error with translation service. Please try again later.');
            setLoading(false);
        }
    };

    return (
        <div className="bg-white p-6 rounded-lg shadow-md">
            <h2 className="text-xl font-semibold mb-4">Indonesian-English Translator</h2>
            
            {error && (
                <div className="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    {error}
                </div>
            )}
              <div className="mb-4">
                <label htmlFor="inputText" className="block text-gray-700 text-sm font-bold mb-2">
                    Indonesian Text
                </label>
                <div className="flex gap-2">
                    <textarea
                        id="inputText"
                        className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        rows="4"
                        value={inputText}
                        onChange={(e) => setInputText(e.target.value)}
                        placeholder="Enter text in Indonesian"
                    ></textarea>
                    <button
                        className="bg-amber-500 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline self-start"
                        onClick={handleTranslate}
                        disabled={loading}
                    >
                        {loading ? '...' : '→'}
                    </button>
                </div>
            </div>
            
            <div className="mb-4">
                <label htmlFor="translatedText" className="block text-gray-700 text-sm font-bold mb-2">
                    English Translation
                </label>
                <div
                    className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 bg-gray-50 min-h-[100px]"
                    id="translatedText"
                >
                    {translatedText || 'Translation will appear here'}
                </div>
            </div>
        </div>    );
}

// Export the component
export default TranslationComponent;
